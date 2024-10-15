@extends('layouts.app')

@section('title', 'Submit a Complaint')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> <!-- Increased to 10 columns (83.33% width) -->
            <h1 class="mb-4">Submit a Complaint</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">How to Submit a Complaint</h5>
                    <p class="card-text">
                        We take your concerns seriously. If you have a complaint, please follow the steps below to submit it:
                    </p>
                    <ol class="list-decimal list-inside">
                        <li>Fill out the complaint form with the necessary details.</li>
                        <li>You have the option to remain anonymous. If you choose to do so, your personal information will not be shared.</li>
                        <li>Submit the form, and you will receive a confirmation of your submission.</li>
                    </ol>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Anonymous Complaints</h5>
                    <p class="card-text">
                        If you prefer to file your complaint anonymously, simply check the "File Anonymously" option on the form. Your identity will be protected, and we will still address your concerns.
                    </p>
                </div>
            </div>

            <div class="text-center mb-5"> <!-- Added mb-5 for more bottom margin -->
                <a href="{{ route('complaints.create') }}" class="btn btn-danger btn-lg">File a Complaint</a>
            </div>

        </div>
    </div>
</div>
@endsection
