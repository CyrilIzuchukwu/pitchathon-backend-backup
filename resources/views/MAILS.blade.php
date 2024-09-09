<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ $mailData['title'] }}</title>

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
        <table class="order-details">
            <thead>
                <tr>
                    <th width="50%" colspan="2">
                        <h2 class="text-start">{{ $mailData['title'] }}</h2>
                    </th>

                </tr>
                <tr class="bg-blue">
                    <th width="50%" colspan="2">{{ $mailData['title'] }}</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>founder_name:</td>
                    <td>{{ $mailData['founder_name'] }}</td>
                </tr>
                <tr>
                    <td>name_of_business:</td>
                    <td>{{ $mailData['name_of_business'] }}</td>

                </tr>
                <tr>
                    <td>address:</td>
                    <td>{{ $mailData['address'] }}</td>


                </tr>
                <tr>
                    <td>country_of_registration:</td>
                    <td>{{ $mailData['country_of_registration'] }}</td>

                </tr>
                <tr>
                    <td>email:</td>
                    <td>{{ $mailData['email'] }}</td>


                </tr>
                <tr>
                    <td> country_of_operation:</td>
                    <td>{{ $mailData['country_of_operation'] }}</td>

                </tr>
                <tr>
                    <td> phone:</td>
                    <td>{{ $mailData['phone'] }}</td>

                </tr>

                <tr>
                    <td>facebook:</td>
                    <td>{{ $mailData['facebook'] }}</td>
                </tr>
                <tr>
                    <td>twitter:</td>
                    <td>{{ $mailData['twitter'] }}</td>

                </tr>
                <tr>
                    <td>linkedin:</td>
                    <td>{{ $mailData['linkedin'] }}</td>


                </tr>
                <tr>
                    <td>country_of_registration:</td>
                    <td>{{ $mailData['country_of_registration'] }}</td>

                </tr>
                <tr>
                    <td>description:</td>
                    <td>{{ $mailData['description'] }}</td>


                </tr>
                <tr>
                    <td> target_sector:</td>
                    <td>{{ $mailData['target_sector'] }}</td>

                </tr>
                <tr>
                    <td> impact_on_msme:</td>
                    <td>{{ $mailData['impact_on_msme'] }}</td>

                </tr>
                <tr>
                    <td>time_in_operation:</td>
                    <td>{{ $mailData['time_in_operation'] }}</td>
                </tr>
                <tr>
                    <td>mrr:</td>
                    <td>{{ $mailData['mrr'] }}</td>

                </tr>
                <tr>
                    <td>team_size_part:</td>
                    <td>{{ $mailData['team_size_part'] }}</td>


                </tr>
                <tr>
                    <td>team_size_full:</td>
                    <td>{{ $mailData['team_size_full'] }}</td>

                </tr>
                <tr>
                    <td>solution_url:</td>
                    <td>{{ $mailData['solution_url'] }}</td>


                </tr>
                <tr>
                    <td> participation_reason:</td>
                    <td>{{ $mailData['participation_reason'] }}</td>

                </tr>
                <tr>
                    <td> hear_about_techmybiz:</td>
                    <td>{{ $mailData['hear_about_techmybiz'] }}</td>

                </tr>


                <tr>
                    <td>pitch_deck:</td>
                    <td>http://www.techmybiz.org/storage/{{ $mailData['pitch_deck'] }}</td>
                </tr>
                <tr>
                    <td>total_revenue:</td>
                    <td>{{ $mailData['total_revenue'] }}</td>

                </tr>
                <tr>
                    <td>solution_url_confirm:</td>
                    <td>{{ $mailData['solution_url_confirm'] }}</td>


                </tr>
            </tbody>
        </table>

        <br>
        <p class="text-center">
            Thank you
        </p>
    </div>
</body>

</html>