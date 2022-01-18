@extends('layout')

@section('title', 'Transaction')

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

@if (!$transactions->isEmpty())
<div class="page-content container">
	<div class="page-header text-blue-d2">
		@foreach ($user as $T)
			<div class="container px-0">
					<div class="row mt-4">
							<div class="col-12 col-lg-12">
									<div class="row">
											<div class="col-12">
													<div class="text-center text-150">
															Invoice ID: #111-222
													</div>
											</div>
									</div>
									<!-- .row -->

									<hr class="row brc-default-l1 mx-n1 mb-4" />

									<div class="row">
											<div class="col-sm-6">
													<div>
															<span class="text-sm text-grey-m2 align-middle">To:</span>
															<span class="text-600 text-110 text-blue align-middle">{{ $T->name }}</span>
													</div>
													<div class="text-grey-m2">
															<div class="my-1">
																	{{ $T->address }}
															</div>
															<div class="my-1"><i
																			class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b
																			class="text-600">{{ $T->phone }}</b></div>
													</div>
											</div>
									</div>

									<div class="mt-4">
											<div class="row text-600 text-secondary-d3 bgc-default-tp1 py-25">
													<div class="d-none d-sm-block col-1">#</div>
													<div class="col-9 col-sm-5">Description</div>
													<div class="d-none d-sm-block col-4 col-sm-2">Transaction</div>
													<div class="d-none d-sm-block col-sm-2">Unit Price</div>
													<div class="col-2">Amount</div>
											</div>
											<hr>
									@endforeach
									@foreach ($transactions as $transaction)
										<div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
											<div class="d-none d-sm-block col-1">1</div>
											<div class="col-9 col-sm-5">{{ $transaction->property->name }}</div>
											<div class="d-none d-sm-block col-2">{{ $transaction->id }}</div>
											<div class="d-none d-sm-block col-2 text-95">{{ $transaction->property->price }}</div>
											<div class="col-2 text-secondary-d2">{{ $transaction->property->price }}</div>
										</div>

									</div>

										<div class="row border-b-2 brc-default-l2"></div>

										@endforeach

										<div class="row mt-3">
									<div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">

									</div>

									<div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
										<div class="row my-2">
											<div class="col-7 text-right ">
												SubTotal
											</div>
											<div class="col-5">
												<span class="text-120 text-secondary-d1">Rp.
													{{ $transactions->sum(function ($a) {
														return $a->property->price;
													}) }}</span>
											</div>
										</div>

										<div class="row my-2">
											<div class="col-7 text-right">
												Tax (10%)
											</div>
											<div class="col-5">
												<span
													class="text-110 text-secondary-d1">Rp. {{ $transactions->sum(function ($a) {
														return $a->property->price / 10;
													}) }}</span>
											</div>
										</div>

										<hr>
											<div class="row my-2 align-items-center bgc-primary-l3 ">
												<div class="col-7 text-right">
													Total Amount
												</div>
												<div class="col-5">
													<span
														class="text-150 text-success-d3 opacity-2">Rp. {{ $transactions->sum(function ($a) {
															return $a->property->price / 10 + $a->property->price;
														}) }}</span>
											</div>
										<hr />
										</div>
										</div>
										</div>
										<hr />
									<div>
									<span class="text-secondary-d1 text-105">Thank you for your business</span>
									<a href="/paid" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0">Pay Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
	</div>
</section>
@else
<div class="container text-center d-flex flex-column" style="margin-top: 3rem;">
	<h4 class="fw-bold">You don't have any transactions.</h4>
	<span class="text-muted">Please come back after you've done some transactions.</span>
</div>
@endif

@endsection
