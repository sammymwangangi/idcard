@extends('dashboard.main')

@section('content')

    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <div class="table-responsive">
      <table class="table table-bordered table-sm">
          <caption>List of Applicants</caption>
        <thead class="bg-warning">
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Date Of Birth</th>
            <th>Gender</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Marital Status</th>
            <th>Husband's Name</th>
            <th>Husband's ID</th>
            <th>Tribe</th>
            <th>Clan</th>
            <th>District</th>
            <th>Division</th>
            <th>Constituency</th>
            <th>Location</th>
            <th>Sub-Location</th>
            <th>Village</th>
            <th>Home Address</th>
            <th>Occupation</th>
            <th>File</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($applicants as $applicant)
          @php
            $date=date('Y-m-d', $applicant['date']);
            @endphp
          <tr>
            <td>{{$applicant['id']}}</td>
            <td>{{$applicant['fname']}}</td>
            <td>{{$applicant['mname']}}</td>
            <td>{{$applicant['lname']}}</td>
            <td>{{$date}}</td>
            <td>{{$applicant['gender']}}</td>
            <td>{{$applicant['fathers_name']}}</td>
            <td>{{$applicant['mothers_name']}}</td>
            <td>{{$applicant['marital']}}</td>
            <td>{{$applicant['husband_name']}}</td>
            <td>{{$applicant['husband_idno']}}</td>
            <td>{{$applicant['tribe']}}</td>
            <td>{{$applicant['clan']}}</td>
            <td>{{$applicant['district']}}</td>
            <td>{{$applicant['division']}}</td>
            <td>{{$applicant['constituency']}}</td>
            <td>{{$applicant['location']}}</td>
            <td>{{$applicant['sub_location']}}</td>
            <td>{{$applicant['village']}}</td>
            <td>{{$applicant['home_address']}}</td>
            <td>{{$applicant['occupation']}}</td>
            <td>{{$applicant['image']}}</td>
            
            <td><a href="{{action('ApplicantsController@edit', $applicant['id'])}}" class="btn btn-warning">Edit</a></td>
            <td>
              <form action="{{action('ApplicantsController@destroy', $applicant['id'])}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection