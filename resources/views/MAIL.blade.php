<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ config('app.name') }}</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        label {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }

        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }

        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }

        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }

        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }

        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }

        .no-border {
            border: 1px solid #fff !important;
        }

        .bg-blue {
            background-color: #414ab1;
            color: #fff;
            height: 30em;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js'"></script>
    <script>
        function generatePDF() {
            const element = document.getElementById("pdf")
            html2pdf()
                .from(element)
                .save();
        }
    </script>
</head>

<body>

    <div class="class" id="pdf">
   <table style="width: 100%; padding: 20px;">
       <tr>
           <td>
               <h2>{{ config('app.name') }}</h2>
           </td>
       </tr>
      <tr>
        <td style="text-align: center;">
          <img src="{{ asset('images/logo.png') }}" alt="Company Logo">
        </td>
      </tr>
      <tr>
        <td style="text-align: left; padding: 20px;">
          <p>Hi <strong>{{ Auth::user()->name }}</strong>,</p>
          <p>Your application for the Techmybiz Pitchathon has been successfully submitted.</p>
          <p>Over the coming weeks, an independent panel of industry experts will be reviewing all the submitted applications. You will be notified if your application is shortlisted to proceed to the next stage of the competition.</p>
          <p>Due to the high volume of messages that we process, we may only be able to notify shortlisted applicants.</p>
          <p>Thank you for taking the time to apply, and best of luck.</p>
          <p>The Techmybiz Team <br> GIZ/DTC Nigeria</p>
        </td>
      </tr>
    </table>
    </div>
</body>

</html>
