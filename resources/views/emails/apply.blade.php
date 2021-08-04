<!DOCTYPE html>
<html lang="en">

<head>
    <title>New applies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>New applies</h2>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Title Jop
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
                        Resume
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{ $apply->id }}
                    </td>
                    <td>
                        <a>
                            {{ $apply->jop->title ?? '' }}
                        </a>
                        <br>
                        <small>
                            {{ $apply->jop->created_at ?? '' }}
                        </small>

                    </td>
                    <td>
                        <a>
                            {{ $apply->firstname }} &nbsp;&nbsp; {{ $apply->lastname }}
                        </a>
                        <br>
                        <small>
                            {{ $apply->created_at }}
                        </small>

                    </td>


                    <td>
                        {{ $apply->email }}

                    </td>
                    <td>
                        {{ $apply->phone }}

                    </td>
                    <td>
                        @if (!empty($apply->getFirstMedia('applies')))
                            <a target="_blank" href="{{ $apply->getFirstMediaUrl('applies') }}">Resume</a>
                        @endif

                    </td>


                </tr>



            </tbody>
        </table>
    </div>

</body>

</html>
