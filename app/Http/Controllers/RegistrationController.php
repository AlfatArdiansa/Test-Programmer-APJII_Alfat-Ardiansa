<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    public function index()
    {
        return view("registration", ["pageTitle" => "Register Bootcamp"]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            "company" => "required|max:255",
            "name" => "required|max:255",
            "email" => "required|email:rfc,dns|unique:participants",
            "phone" => ["required", "regex:/^08[0-9]{9,10}$/"]
        ]);

        $photo_name = $request->file("photo")->store("participant-photo");

        Participant::create(
            [
                "company" => $validateData["company"],
                "name" => $validateData["name"],
                "email" => $validateData["email"],
                "phone" => $validateData["phone"],
                "photo" => $photo_name
            ]
        );
        // $request->session()->flash("success", "Registration success!, We will send email to you soon!");

        return redirect("/")->with("success", "Registration success!, We will send email to you soon!");
    }

    public function destroy(Request $request, string $id)
    {
        $participant = Participant::where("id", $id)->first();

        Storage::delete($participant->photo);

        Participant::destroy($id);
        return redirect("/admin")->with("success", "Participant has been deleted!");
    }
}
