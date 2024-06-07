@extends('mahasiswa.layouts.main')
@section('style')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap");

        .faq h1 {
            color: #fff;
            text-align: center;
        }

        details {
            background-color: #1d2951;
            color: #fff;
            font-size: 1.5rem;
            border-radius: 10px;
        }

        summary {
            padding: 0.5em 1.3rem;
            list-style: none;
            display: flex;
            justify-content: space-between;
            transition: height 1s ease;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        summary:after {
            content: "\002B";
        }

        details[open] summary {
            border-bottom: 1px solid #aaa;
            margin-bottom: 0.5em;
        }

        details[open] summary:after {
            content: "\00D7";
        }

        details[open] div {
            padding: 0.5em 1em;
        }
    </style>
@endsection
@section('content')
    <h2 class="pt-2 mb-4 fw-bold text-center" style="color: #1d2951">Frequently Askes Questions</h2>
    <br />
    <section class="container">
        <div class="row">
            <!-- <div class="col-sm">
              <h3>Question 1</h3>
              <p>Answer to question 1...</p>

              <h3>Question 2</h3>
              <p>Answer to question 2...</p>

            </div> -->
            <div class="faq">
                <details>
                    <summary>What information do you need?</summary>
                    <div>The tags <em>details</em> and <em>summary</em> have you covered.</div>
                </details>
                <br /><br />
                <details>
                    <summary>What information do you need?</summary>
                    <div>The tags <em>details</em> and <em>summary</em> have you covered.</div>
                </details>
                <br /><br />
                <details>
                    <summary>What information do you need?</summary>
                    <div>The tags <em>details</em> and <em>summary</em> have you covered.</div>
                </details>
                <br /><br />
                <details>
                    <summary>What information do you need?</summary>
                    <div>The tags <em>details</em> and <em>summary</em> have you covered.</div>
                </details>
            </div>
        </div>
    </section>
@endsection
