<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
    <style>
        input {
            color: black!important;
            width: 100%;
        }
        #bep2,#btc2,#erc20,#sol,#usdt2,#trc20,#ltc{
            display: none;
        }
        .cont3 h2{
            color: blue;
            text-transform: capitalize;
            margin: 10px;
            font-size: 25px;
        }
        .cont3 ul {
            margin: 5px;
            text-align:left;
        }
        .cont3 ul li{
            list-style-type: disc;
            margin: 5px;
            text-transform: capitalize;
            text-align:left;
        }
        div.btn{
            margin: 10px 0;
        }
        .lastly{
            text-transform: capitalize;
        }
        .lastly main{
            display: flex;
            justify-content: space-between;
            margin: 10px;
        }
        .cont3,.cont2,.lastly{
            display: none;
        }
    </style>

</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                           
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('user.sidebar')
        <!-- partial -->
        @include('user.nav')
        <div class="containter-fluid page-body-wrapper">
           
            <div class="container" align="center" style="padding-top:30px;">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                   {{session()->get('message')}} 
                </div>
            @endif
                <form action="{{url('upload_payment')}}" method="post">
                    @csrf
                    <div class="container" style="padding-top:30px;">
                     <section class="cont1">
                        <div style="padding: 15px;">
                            <label for="" style="text-align:left; display:block;">Coin type</label> <br>
                            <select name="cointype" id="cointype" style="color: black;width:100%;">
                                <option> select coin name</option>
                                <option value="busd">BUSD</option>
                                <option value="bnb">Bnb Smartchain</option>
                                <option value="btc">Bitcoin</option>
                                <option value="eth">Ethereum</option>
                                <option value="ltc">Litecoin</option>
                                <option value="sol">Solana</option>
                                <option value="tron">Tron</option>
                                <option value="usdt">USDT</option>
                            </select>
                        </div>
                        <div style="padding: 15px;">
                            <label for="" style="text-align:left; display:block;">Amount</label> <br>
                            <input type="tel" name="price" id="inputtel" placeholder="Amount in Dollar">
                        </div>
                        <div style="padding: 15px;">
                            <div class="btn btn-primary typesubmit">continue</div>
                        </div>
                     </section>
                       <section class="cont2">
                        {{-- address types --}}
                    
                         <div style="padding: 15px;" id="address1">
                            <label for="" style="text-align:left; display:block;">Network</label> <br>
                            <select name="network" id="" style="color: black;width:100%;">
                                <option> select Network</option>
                                <option value="bep20" id="bep20">Bep20</option>
                                <option value="bep2" id="bep2">Bep2</option>
                                <option value="btc2" id="btc2">BTC</option>
                                <option value="erc20"id="erc20">ERC20</option>
                                <option value="sol"id="sol">SOL</option>
                                <option value="USDT" id="usdt2">Bep20</option>
                                <option value="trc"id="trc20">TRC20</option>
                                <option value="ltc" id="ltc">LTC</option>
                            </select>
                        </div>
                        {{-- address type ends --}}
                        <div style="padding: 15px;">
                            <label for="" style="text-align:left; display:block;">Wallet address</label> <br>
                            <input type="tel" name="wallet" id="" placeholder="Wallet address"
                                style="width: 100%;">
                        </div>
                        <div class="btn btn-primary networktype">continue</div>
                        
                       </section>
                       <section class="cont3">
                        <h2>please, read the instructions below</h2>
                        <ul>
                            <li>opening orders without making payments is not allowed</li>
                            <li>failure to comply with the above stated terms leads to limitation on your vortex account and total loss of paid amount</li>

                        </ul>
                        <input type="checkbox" name="" id=""> <a>i agree to the instructions above</a> <br>
                        <div class="btn btn-primary police">continue</div>
                    </section>

                    <section class="lastly">
                        <h2>#140,600.0</h2>
                        <p>bank transfer</p>
                        <p>kindly pay the above amount to the payment details below</p>
                        <main class="details">
                            <p>bank name</p><h4>gt bank</h4>
                        </main>
                        <main class="details">
                            <p>Account number</p><h4>82278484848</h4>
                        </main>
                        <main class="details">
                            <p>Account name</p><h4>Romeoscript</h4>
                        </main>
                        <button type="submit" class="btn btn-success"> I HAVE MADE MY PAYMENT</button>
                    </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    @include('user.script')
    <script>
         // cointype chage
  let coinType = document.getElementById('cointype')
let bep20 = document.getElementById('bep20')
let bep2 = document.getElementById('bep2')
let btc2 = document.getElementById('btc2')
let erc20 = document.getElementById('erc20')
let sol = document.getElementById('sol')
let USDT = document.getElementById('usdt2')
let trc = document.getElementById('trc20')
let ltc = document.getElementById('ltc')
let typeSubmit = document.querySelector('.typesubmit')
let cont1 = document.querySelector('.cont1')
let cont2 = document.querySelector('.cont2')
let cont3 = document.querySelector('.cont3')
let lastly = document.querySelector('.lastly')
let networktype = document.querySelector('.networktype')
let police = document.querySelector('.police')
let inputTel = document.getElementById('inputtel')
console.log(networktype,police,lastly)

typeSubmit.addEventListener('click',()=>{
    cont2.style.display = 'block'
    cont1.style.display = 'none'
    if(inputTel.value.trim() == ''){
        
        return;
        if (coinType.value ==='busd' ) {
    bep20.style.display = 'block'
    bep2.style.display = 'none'
    btc2.style.display = 'none'
    erc20.style.display = 'none'
    sol.style.display = 'none'
    USDT.style.display = 'none'
    trc.style.display = 'none'
    ltc.style.display = 'none'
    console.log('you are legit')
  }
  else if(coinType.value ==='bnb' ) {
    bep20.style.display = 'none'
    bep2.style.display = 'block'
    btc2.style.display = 'none'
    erc20.style.display = 'none'
    sol.style.display = 'none'
    USDT.style.display = 'none'
    trc.style.display = 'none'
    ltc.style.display = 'none'
  }
  else if(coinType.value ==='btc' ) {
    bep20.style.display = 'none'
    bep2.style.display = 'none'
    btc2.style.display = 'block'
    erc20.style.display = 'none'
    sol.style.display = 'none'
    USDT.style.display = 'none'
    trc.style.display = 'none'
    ltc.style.display = 'none'
  }
  else if (coinType.value ==='eth' ) {
    bep20.style.display = 'none'
    bep2.style.display = 'none'
    btc2.style.display = 'none'
    erc20.style.display = 'block'
    sol.style.display = 'none'
    USDT.style.display = 'none'
    trc.style.display = 'none'
    ltc.style.display = 'none'
  }
  else if (coinType.value ==='ltc' ) {
    bep20.style.display = 'none'
    bep2.style.display = 'none'
    btc2.style.display = 'none'
    erc20.style.display = 'none'
    sol.style.display = 'none'
    USDT.style.display = 'none'
    trc.style.display = 'none'
    ltc.style.display = 'block'
  }
  else if (coinType.value ==='sol' ) {
    bep20.style.display = 'none'
    bep2.style.display = 'none'
    btc2.style.display = 'none'
    erc20.style.display = 'none'
    sol.style.display = 'block'
    USDT.style.display = 'none'
    trc.style.display = 'none'
    ltc.style.display = 'none'
  }
  else if(coinType.value ==='tron' ) {
    bep20.style.display = 'none'
    bep2.style.display = 'none'
    btc2.style.display = 'none'
    erc20.style.display = 'none'
    sol.style.display = 'none'
    USDT.style.display = 'none'
    trc.style.display = 'block'
    ltc.style.display = 'none'
  }
  else if(coinType.value ==='usdt' ) {
    bep20.style.display = 'none'
    bep2.style.display = 'none'
    btc2.style.display = 'none'
    erc20.style.display = 'none'
    sol.style.display = 'none'
    USDT.style.display = 'block'
    trc.style.display = 'block'
    ltc.style.display = 'none'
  }
  else{
    bep20.style.display = 'none'
    bep2.style.display = 'none'
    btc2.style.display = 'none'
    erc20.style.display = 'none'
    sol.style.display = 'none'
    USDT.style.display = 'none'
    trc.style.display = 'none'
    ltc.style.display = 'none'
  }
 
    }
  
})

// console.log(cont1)
// console.log(cont2)
// console.log(cont3)
// console.log(lastly)
networktype.addEventListener('click',()=>{
    cont3.style.display = 'block'
    cont2.style.display = 'none'
})
police.addEventListener('click',()=>{
    lastly.style.display = 'block'
    cont3.style.display = 'none'
    // cont1.style.display = 'none'
})
    </script>
    <!-- End custom js for this page -->
</body>

</html>
