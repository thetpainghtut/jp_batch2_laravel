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


      <form id="payroll" method="post" action="{{route('payrolls.store')}}">
        @csrf
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td colspan="4">
                <h5 class="text-center">MMIT Payrolls</h5>
                <p id="satff_name" class="text-center mb-0"></p>
              </td>
            </tr>
            <tr>
              <td colspan="2">Earing:</td>
              <td colspan="2">Dedution:</td>
            </tr>
            
            <tr>
              <td>Attendance Bonus:</td>
              <td>
                <input type="number" name="a_bonus" class="a_bonus">
              </td>
              <td>Attendance dedution:</td>
              <td>
                <input type="number" name="a_dedu" class="a_dedu">
              </td>
            </tr>

            <tr>
              <td>Other Bonus:</td>
              <td>
                <input type="number" name="o_bonus" class="o_bonus">
              </td>
              <td>Other dedution:</td>
              <td>
                <input type="number" name="o_dedu" class="o_dedu">
              </td>
            </tr>
            <tr>
              <td>Salary:</td>
              <td>
                <input type="number" name="salary" id="salary">
                <input type="hidden" name="staff_id" id="staff_id">
              </td>
              <td>SSB:</td>
              <td>
                <input type="number" name="ssb" >
              </td>
            </tr>

            <tr>
              <td>Earing:</td>
              <td>
                <input type="number" name="earing" class="earing" readonly>
              </td>
              <td>Dedution:</td>
              <td>
                <input type="number" name="dedution" class="dedution" readonly>
              </td>
            </tr>
            
            <tr>
              <td colspan="3">Total Payment:</td>
              <td>
                <input type="number" name="total" class="total" readonly>
              </td>
            </tr>
          </tbody>
        </table>

        <input type="submit" class="btn btn-success" value="Save">
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
        var id = $(this).val();
        $.post("getastaff",{id:id},function (response) {
          console.log(response)
          $('#payroll').show();
          $('#satff_name').text(response.name)
          $('#salary').val(response.salary);
          $('#staff_id').val(response.id);
        })
      })


      $('.earing').focus(function (argument) {
        var a_bonus = parseInt($('.a_bonus').val());
        var o_bonus = parseInt($('.o_bonus').val());
        var salary = parseInt($('#salary').val());

        var earing = a_bonus+o_bonus+salary;
        $(this).val(earing);
      })
      
    })
  </script>
@endsection