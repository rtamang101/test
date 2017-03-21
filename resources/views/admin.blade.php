<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .custom-button-width {
            width:150px;
        }
        .custom-input-width {
            width:150px;
            margin-right:3px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <h2>Welcome admin!</h2>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <div class="row">
        <div class="col-md-3">
            <div class="btn-group-vertical">

                <a type="button" href="get_messages" class=" col-md-1  btn btn-primary custom-button-width">Check Response</a>
                <a type="button" href="registration_view" class=" col-md-1  btn btn-primary custom-button-width">Add An Employee</a>

            </div>
        </div>
        <div class="col-md-9">
            <form type="post" method="post" action="send_message">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group col-md-4">
                    <label for="sel1">Select list (select one):</label>
                    <select class="form-control" id="sel1" name="department_id">
                        @foreach($dep as $depp)
                            <option value="{{$depp->id}}">{{$depp->name}}</option>
                        @endforeach
                    </select>

                    <div class="checkbox">
                        <label><input type="checkbox"> Consent</label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
                    </div>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-info">Publish</button>
                </div>

            </form>


        </div>
    </div>
</div>


</body>
</html>

