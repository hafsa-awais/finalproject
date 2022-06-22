@extends('templates/headerAndFooterTemplate')


@section('title', 'Provider')


@section('content')

<!-- <section class="paymentform">
    
  <div class="d-flex justify-content-between align-items-center mb-5">
    <div class="d-flex flex-row align-items-center">
      <h4 class="text-uppercase mt-1">Payment</h4>
      
    </div>
    <a href="#!">Cancel and return to the website</a>
  </div>

  <div class="row">
    <div class="col-md-7 col-lg-7 col-xl-6 mb-4 mb-md-0">
      <h5 class="mb-0 text-success">$85.00</h5>
      <h5 class="mb-3">Name of Property</h5>
      <div>
        
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex flex-row mt-1">
            <h6>Total Balance</h6>
            <h6 class="fw-bold text-success ms-1">$85.00</h6>
          </div>
          <div class="d-flex flex-row align-items-center text-primary">
            <span class="ms-1">Add Payment card</span>
          </div>
        </div>
       
        <div class="d-flex flex-column mb-3">
          <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" />
            <label class="btn btn-outline-primary btn-md" for="option1">
              <div class="d-flex justify-content-between">
                <span>VISA </span>
                
              </div>
            </label>

            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" checked />
            <label class="btn btn-outline-primary btn-md" for="option2">
              <div class="d-flex justify-content-between">
                <span>MASTER CARD </span>
                
              </div>
            </label>
          </div>
        </div>
        <div class="btn btn-success btn-lg btn-block">Proceed to payment</div>
      </div>
    </div>
    
  </div>

</section> -->
<div class="canceldiv">
<a href="#!">Cancel and return to the website</a>
</div>
<!-- Credit card form -->
<section class="paymentform">
  <div class="row">
    <div class="col-md-8 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h3 class="mb-0">Payment</h3>

    <div class="col-md-7 col-lg-7 col-xl-6 mb-4 mb-md-0">
      <h5 class="mb-0 text-success">$85.00</h5>
      <h5 class="mb-3">Name of Property</h5><span>
    </div>
          
        </div>
        <div class="card-body">
          
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                
              </div>
             

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkoutForm1" />
              <label class="form-check-label" for="checkoutForm1">
                Shipping address is the same as my billing address
              </label>
            </div>

            <div class="form-check mb-4">
              <input class="form-check-input" type="checkbox" value="" id="checkoutForm2" checked />
              <label class="form-check-label" for="checkoutForm2">
                Save this information for next time
              </label>
            </div>

            <hr class="my-4" />

            <h5 class="mb-4">Payment</h5>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm3"
                checked />
              <label class="form-check-label" for="checkoutForm3">
                Credit card
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm4" />
              <label class="form-check-label" for="checkoutForm4">
                Debit card
              </label>
            </div>

            <div class="form-check mb-4">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm5" />
              <label class="form-check-label" for="checkoutForm5">
                Paypal
              </label>
            </div>

            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="formNameOnCard" class="form-control" />
                  <label class="form-label" for="formNameOnCard">Name on card</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="formCardNumber" class="form-control" />
                  <label class="form-label" for="formCardNumber">Credit card number</label>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-3">
                <div class="form-outline">
                  <input type="text" id="formExpiration" class="form-control" />
                  <label class="form-label" for="formExpiration">Expiration</label>
                </div>
              </div>
              <div class="col-3">
                <div class="form-outline">
                  <input type="text" id="formCVV" class="form-control" />
                  <label class="form-label" for="formCVV">CVV</label>
                </div>
              </div>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">
              Continue to checkout
            </button>
          </form>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- Credit card form -->

@endsection