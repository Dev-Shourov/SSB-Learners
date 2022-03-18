@extends('frontend.layout.template')

@section('style')
<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/invoice/style.css') }}"/>
@endsection


@section('body')
<div class="container-fluid invoice-container pd-t-150">
  <!-- Header -->
  <header>
  <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-start mb-3 mb-sm-0">
      <img id="logo" src="images/logo.png" title="SSB Learners" alt="SSB Learners" />
    </div>
    <div class="col-sm-5 text-center text-sm-end">
      <h4 class="text-7 mb-0">Invoice</h4>
    </div>
  </div>
  <hr>
  </header>
  
  <!-- Main Content -->
  <main>
  <div class="row">
    <div class="col-sm-6"><strong>Date:</strong> 05/12/2020</div>
    <div class="col-sm-6 text-sm-end"> <strong>Invoice No:</strong> 16835</div>
	  
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6 text-sm-end order-sm-1"> <strong>Pay To:</strong>
      <address>
      SSB Learners<br />
      House 40, Road 81<br />
      Banani, Dhaka-1212<br />
      info@ssblearners.com
      </address>
    </div>
    <div class="col-sm-6 order-sm-0"> <strong>Invoiced To:</strong>
      <address>
      {{ $user->name }}<br />
      {{ $user->address }}<br />
      {{ $user->city }} {{ $user->zip_code }}<br />
      {{ $user->country }}
      </address>
    </div>
  </div>
	
  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table mb-0">
		<thead class="card-header">
          <tr>
            <td class="col-3"><strong>Course</strong></td>
			      <td class="col-6"><strong>Mentor Name</strong></td>
			      <td class="col-1 text-center"><strong>QTY</strong></td>
            <td class="col-2 text-end"><strong>Price</strong></td>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td class="col-3">{{ $batch->Course->eng_title }}</td>
              <td class="col-6">{{ $batch->Mentor->fullname }}</td>
			  <td class="col-1 text-center">1</td>
			  <td class="col-2 text-end">BDT{{ $batch->Course->price }}</td>
            </tr>
          </tbody>
		  <tfoot class="card-footer">
			<tr>
              <td colspan="3" class="text-end"><strong>Sub Total:</strong></td>
              <td class="text-end">BDT{{ $batch->Course->price }}</td>
            </tr>
            <tr>
              <td colspan="3" class="text-end"><strong>Tax:</strong></td>
              <td class="text-end">BDT 0.00</td>
            </tr>
			<tr>
              <td colspan="3" class="text-end border-bottom-0"><strong>Total:</strong></td>
              <td class="text-end border-bottom-0">BDT{{ $batch->Course->price }}</td>
            </tr>
		  </tfoot>
        </table>
      </div>
    </div>
  </div>
  </main>
  <!-- Footer -->
  <footer class="text-center mt-4">
  <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>
  <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div>
  </footer>
</div>
@endsection