@extends('backendtemplate')
@section('title','Staff List')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Payrolls</h1>
      
      <form>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="InputDepartment">Department:</label>
            <select name="department" class="form-control" id="department">
              <optgroup label="Choose Department">
                @foreach($departments as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
              </optgroup>
            </select>
          </div>
        
          <div class="form-group col-md-4">
            <label for="InputPosition">Position:</label>
            <select name="position" class="form-control" id="position">
              <optgroup label="Choose Position">
                @foreach($positions as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
              </optgroup>
            </select>
          </div>
        
          <div class="form-group col-md-4">
            <label for="InputPosition">Staff:</label>
            <select name="position" class="form-control" id="staff" disabled>
              <optgroup label="Choose Staff">
                @foreach($staff as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
              </optgroup>
            </select>
          </div>
        </div>
      </form>


      <form id="payroll">
        <table>
          My Form
        </table>
      </form>

    </div>
  </div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function (argument) {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#payroll').hide();

      $('#position').change(function () {
        var position = $(this).val();
        $.post("getstaff",{position:position},function (response) {
          console.log(response)
          $('#staff').prop('disabled',false);

          var html=`<select name="position" class="form-control" id="staff">
              <option value="">Choose Staff</option>`;
          $.each(response,function (i,v) {
            html +=`<option value="${v.id}">${v.name}</option>`;
          })
          html += `</select>`;

          $('#staff').html(html);
        })
      })

      $('#staff').change(function () {
        $('#payroll').show();
      })
      
    })
  </script>
@endsection