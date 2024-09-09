<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ $mailData1['title'] }}</title>

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
        
    <p>Dear <span style="font-weight: bold;">{{ $mailData1['name'] }},</span></p>
    <p>DTC Nigeria wishes to congratulate you on your successful bid to be an Independent Reviewer for applications received through the Techmybiz “Call for Digital Solutions”.</p>
    <p>The TechMyBiz initiative is an end-to-end digital transformation process to select 30 homegrown digital solutions by Nigerian innovators and/or start-ups that target MSMEs (or are adaptable),  support their further development, promotion and adoption by MSMEs (matchmaking, training, and aftercare’ support), thereby enabling the digital transformation of Non-Tech MSMEs.</p>
    <p>The “Call for Digital Solutions” will shortlist the top 50 digital solutions from the Green Economy, Trade, Manufacturing and other sectors. Their innovators, will be invited to a bootcamp and the TechMyBiz Pitchathon in May 2023, for the selection of the 30 finalists that will receive GIZ/DTC Nigeria support.</p>
    <p>Considering the vast access to human resource shortlisted for this engagement, your selection is premised on your technical and business competencies and track in one or more of the focus sectors – green economy, retail and manufacturing/production. The honour and responsibility is now entrusted to you to objectively and meritoriously assess up to 150 digital solutions.</p>
    <p>Your assessment shall be done entirely via the Techmybiz Pitchathon Management Platform between April 25 and May 18 2023.</p>
    <p>Onboarding and information sessions will hold as follows:</p>
    <ul>
      <li>Onboarding session (compulsory): 27 April 2023</li>
      <li>Information session 1: 5 May 2023</li>
      <li>Information session 2: 12 may 2023</li>
    </ul>
    <p>To activate your account and start reviewing submitted digital solutions via the platform, click <a href="https://techmybiz.org/login">techmybiz.org</a> and login using the credentials below:</p>
    <ul>
      <li>Username: <span style="font-weight: bold;">{{ $mailData1['email'] }}</span></li>
      <li>Password: <span style="font-weight: bold;">{{ $mailData1['password'] }}</span></li>
    <li>Role: <span style="font-weight: bold;">{{ $mailData1['role_as'] }}</span></li>
    </ul>
    <p>Looking forward to your contribution to the digital transformation of MSMEs in Nigeria.</p>
    <p>Kind regards,</p>
    <p>GIZ/DTC Nigeria</p>
        
        
 
    </div>
</body>

</html>