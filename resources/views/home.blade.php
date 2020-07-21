<head>
  <title>Laravel Sample</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="css/app.css" rel="stylesheet" type="text/css">
</head>

<!-- https://crieit.net/posts/Laravel-Carbon -->
<body>
  <div class="m-3">
    <table class="table table-bordered">
      <thead>
        <tr>
          @foreach (['日', '月', '火', '水', '木', '金', '土'] as $dayOfWeek)
          <th>{{ $dayOfWeek }}</th>
          @endforeach
        </tr>
      </thead>
      <tbody>
        @foreach ($dates as $date)
        @if ($date->dayOfWeek == 0)
        <tr>
        @endif
          <td
          @if ($date->month != $currentMonth)
            class="bg-secondary"
            @else
            class="day"
            @endif
          >
            {{ $date->day }}
          </td>
        @if ($date->dayOfWeek == 6)
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
  
    @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
    @endif
    <form action="/notification" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label for="date-input">Date</label>
        <input type="text" name="date" class="form-control" id="date-input" value="{{ $notification->date }}">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="name-input">Name</label>
        <input type="text" name="name" class="form-control" id="name-input" value="{{ $notification->name }}" placeholder="Name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  
  <script type="text/javascript" src="js/app.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

