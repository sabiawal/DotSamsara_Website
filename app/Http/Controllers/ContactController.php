<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use DataTables;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::get();
        if ($request->ajax()) {
            return Datatables::of($contacts)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $viewBtn = '<a href="' . route('contact.view', $row->id) . '" class="btn btn-info btn-sm">View</a>';
                    $deleteBtn = '<a href="' . route('contact.delete', $row->id) . '" class="btn btn-danger btn-sm">View</a>';
                    return $viewBtn . ' ' . $deleteBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.contact.index', compact('contacts'));
    }

    public function view($id)
    {
        $contact = Contact::findOrFail($id);
        return view('backend.contact.view-contacts', compact('contact'));
    }


    public function delete($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();

            return redirect()->route('contact.index')->with('success', 'Contact Deleted SuccessFully');
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 404,
                'message' => [],
            ], 404);
        }
    }
}