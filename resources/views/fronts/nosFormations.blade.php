@extends('frontLayout')

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">

    <div class="pricing-header p-3 pb-md-4 mb-5 mx-auto text-center">
      <h1 class="display-4 fw-normal text-light">Choisissez une formation qui vous conviendra.</h1>
      <p class="fs-5 text-light">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

  <main class="px-5">

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Rédaction Web</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            {{-- <a href="{{ route('redactionWeb') }}" class="w-100 btn btn-lg btn-outline-warning">Suivre la formation</a> --}}
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Marketing digital</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            {{-- <a href="{{ route('marketingDigital') }}" class="w-100 btn btn-lg btn-outline-warning">Suivre la formation</a> --}}
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Art Oratoire</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            {{-- <a href="{{ route('artOratoire') }}" class="w-100 btn btn-lg btn-outline-warning">Suivre la formation</a> --}}
          </div>
        </div>
      </div>
      <div class="col-lg">
        <div class="card mb-4 rounded-3 shadow-sm btn-warning">
          <div class="card-header py-3 text-bg-warning btn-warning">
            <h4 class="my-0 fw-normal">E-Commerce</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            {{-- <a href="{{ route('eCommerce') }}" class="w-100 btn btn-lg btn-outline-warning">Suivre la formation</a> --}}
          </div>
        </div>
      </div>
    </div>
  </main>

</div>
