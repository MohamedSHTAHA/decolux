<!DOCTYPE html>
<html lang="en">

<head>
    <title>New contactUs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>New contactUs</h2>
        <table class="table">
            <thead>
                <tr>

                    <th style="width: 1%">
                        #
                    </th>

                    <th style="width: 20%">
                        Name
                    </th>
                    <th style="width: 20%">
                        Email
                    </th>
                    <th style="width: 20%">
                        Phone
                    </th>
                    <th style="width: 20%">
                        company name
                    </th>
                    <th style="width: 20%">
                        company Address
                    </th>
                    <th style="width: 20%">
                        comment message
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>
                        {{ $contactUs->id }}
                    </td>
                    <td>
                        {{ $contactUs->name }}

                    </td>
                    <td>
                        {{ $contactUs->email }}

                    </td>
                    <td>
                        {{ $contactUs->phone }}

                    </td>
                    <td>
                        {{ $contactUs->company_name }}

                    </td>

                    <td>
                        {{ $contactUs->company_Address }}

                    </td>
                    <td>
                        {{ $contactUs->comment_message }}

                    </td>



                </tr>



            </tbody>
        </table>
    </div>

</body>

</html>
