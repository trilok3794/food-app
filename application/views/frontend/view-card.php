<section id="viewcart" class="viewcart-page-content page-content">
   <section class="breadcrumnb">
      <div class="container">
         <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="clearfix">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
               <meta itemprop="position" content="1">
               <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
               <meta itemprop="position" content="2">
               <span itemprop="name"> Shopping Cart</span>
            </li>
         </ol>
      </div>
   </section>
   <section class="page_header">
      <div class="container">
         <h1 class="page_heading"> Shopping Cart</h1>
      </div>
   </section>
   <section class="cart-details">
      <form action="shipquote.asp" method="post" name="shipquote" onsubmit="return submitForm();">
         <input type="hidden" name="thispage" value="https://sweet-jane-preview-com.3dcartstores.com/view_cart.asp">
         <input type="hidden" name="shipping_zip" value="[shipping_zip]">
         <script type="text/javascript">document.shipquote.thispage.value = window.location.href;</script>
      </form>
      <form action="recalculate.asp" method="post" name="recalculate" id="recalculate" data-parsley-validate="">
         <div class="container">
            <div class="row">
               <div class="cart-left col-lg-9 col-md-8">
                  <div id="mobile-sticky-checkout" class="mobile-sticky-checkout order-summary sticky-checkout" style="top: 0px;">
                     <div class="summary-totals">
                        Cart Subtotal (5 items): <span class="summary-totals-colors">$440.00</span>
                     </div>
                     <div class="checkout-btns">
                        <a href="checkout.asp?step=1" class="btn btn-primary btn-checkout">Proceed to Checkout</a>
                     </div>
                  </div>
                  <ul class="cart-items">
                     <li class="items-header">
                        <span class="item-name">ITEMS</span>
                        <span class="item-price">PRICE</span>
                        <span class="item-qty">QTY</span>
                        <span class="item-total">Total</span>
                     </li>
                     <li class="cart-item" data-oitem="">
                        <span class="item-name clearfix">
                        <span class="item-thumb">
                        <a href="https://sweet-jane-preview-com.3dcartstores.com/Oats-and-Cocoa-Butter-Soap_p_15.html"><img src="thumbnail.asp?file=assets/images/oats-cocoa_butter_thumbnail.jpg&amp;maxx=100&amp;maxy=0" class="img-responsive" alt=""></a>
                        </span>
                        <span class="item-name-right">
                        <span class="item-fullname"><a href="https://sweet-jane-preview-com.3dcartstores.com/Oats-and-Cocoa-Butter-Soap_p_15.html">Oats and Cocoa Butter Soap</a></span>
                        <span class="item-actions">
                        <span class="item-action">
                        <a class="removeItem" href="#" onclick="document.recalculate.qty0.value=0;document.recalculate.submit();"><i class="icon-cancel"></i>Delete</a>
                        </span>
                        </span>
                        </span>
                        </span>
                        <span class="item-price">$75.00</span>
                        <span class="quantity item-qty">
                        <span class="quant-input">
                        <input type="text" id="qtyItem186" name="qty0" value="1" placeholder="1">
                        <input type="hidden" name="colid0" value="186">
                        <span class="qty-nav">
                        <button type="button" class="qty-up" data-target="#qtyItem186">+</button>
                        <button type="button" class="qty-down" data-target="#qtyItem186">-</button>
                        </span>
                        </span>
                        <a href="#" class="update-qty">Update</a>
                        </span>
                        <span class="item-total">$75.00</span>
                     </li>
                     <li class="cart-item" data-oitem="">
                        <span class="item-name clearfix">
                        <span class="item-thumb">
                        <a href="https://sweet-jane-preview-com.3dcartstores.com/Natural-Aloes-Soap_p_17.html"><img src="thumbnail.asp?file=assets/images/aloes_thumbnail.jpg&amp;maxx=100&amp;maxy=0" class="img-responsive" alt=""></a>
                        </span>
                        <span class="item-name-right">
                        <span class="item-fullname"><a href="https://sweet-jane-preview-com.3dcartstores.com/Natural-Aloes-Soap_p_17.html">Natural Aloes Soap</a></span>
                        <span class="item-actions">
                        <span class="item-action">
                        <a class="removeItem" href="#" onclick="document.recalculate.qty1.value=0;document.recalculate.submit();"><i class="icon-cancel"></i>Delete</a>
                        </span>
                        </span>
                        </span>
                        </span>
                        <span class="item-price">$65.00</span>
                        <span class="quantity item-qty">
                        <span class="quant-input">
                        <input type="text" id="qtyItem185" name="qty1" value="1" placeholder="1">
                        <input type="hidden" name="colid1" value="185">
                        <span class="qty-nav">
                        <button type="button" class="qty-up" data-target="#qtyItem185">+</button>
                        <button type="button" class="qty-down" data-target="#qtyItem185">-</button>
                        </span>
                        </span>
                        <a href="#" class="update-qty">Update</a>
                        </span>
                        <span class="item-total">$65.00</span>
                     </li>
                     <li class="cart-item" data-oitem="">
                        <span class="item-name clearfix">
                        <span class="item-thumb">
                        <a href="https://sweet-jane-preview-com.3dcartstores.com/Assorted-Soaps_p_14.html"><img src="thumbnail.asp?file=assets/images/gift-set_thumbnail.jpg&amp;maxx=100&amp;maxy=0" class="img-responsive" alt=""></a>
                        </span>
                        <span class="item-name-right">
                        <span class="item-fullname"><a href="https://sweet-jane-preview-com.3dcartstores.com/Assorted-Soaps_p_14.html">Assorted Soaps</a></span>
                        <span class="item-actions">
                        <span class="item-action">
                        <a class="removeItem" href="#" onclick="document.recalculate.qty2.value=0;document.recalculate.submit();"><i class="icon-cancel"></i>Delete</a>
                        </span>
                        </span>
                        </span>
                        </span>
                        <span class="item-price">$110.00</span>
                        <span class="quantity item-qty">
                        <span class="quant-input">
                        <input type="text" id="qtyItem184" name="qty2" value="1" placeholder="1">
                        <input type="hidden" name="colid2" value="184">
                        <span class="qty-nav">
                        <button type="button" class="qty-up" data-target="#qtyItem184">+</button>
                        <button type="button" class="qty-down" data-target="#qtyItem184">-</button>
                        </span>
                        </span>
                        <a href="#" class="update-qty">Update</a>
                        </span>
                        <span class="item-total">$110.00</span>
                     </li>
                     <li class="cart-item" data-oitem="">
                        <span class="item-name clearfix">
                        <span class="item-thumb">
                        <a href="https://sweet-jane-preview-com.3dcartstores.com/Butterfly-Soap-Set_p_16.html"><img src="thumbnail.asp?file=assets/images/butterfly_thumbnail.jpg&amp;maxx=100&amp;maxy=0" class="img-responsive" alt=""></a>
                        </span>
                        <span class="item-name-right">
                        <span class="item-fullname"><a href="https://sweet-jane-preview-com.3dcartstores.com/Butterfly-Soap-Set_p_16.html">Butterfly Soap Set</a></span>
                        <span class="item-actions">
                        <span class="item-action">
                        <a class="removeItem" href="#" onclick="document.recalculate.qty3.value=0;document.recalculate.submit();"><i class="icon-cancel"></i>Delete</a>
                        </span>
                        </span>
                        </span>
                        </span>
                        <span class="item-price">$95.00</span>
                        <span class="quantity item-qty">
                        <span class="quant-input">
                        <input type="text" id="qtyItem183" name="qty3" value="2" placeholder="2">
                        <input type="hidden" name="colid3" value="183">
                        <span class="qty-nav">
                        <button type="button" class="qty-up" data-target="#qtyItem183">+</button>
                        <button type="button" class="qty-down" data-target="#qtyItem183">-</button>
                        </span>
                        </span>
                        <a href="#" class="update-qty">Update</a>
                        </span>
                        <span class="item-total">$190.00</span>
                     </li>
                  </ul>
                  <div class="left-subtotal summary-totals">
                     Subtotal (5 items): <span class="summary-totals-colors">$440.00</span>
                  </div>
               </div>
               <div id="cart-right" class="cart-right col-lg-3 col-md-4">
                  <div id="cart-box" class="cart-box fixed-cart-box" style="padding-top: 169px;">
                     <div class="cart-box-sticky" style="top: 0px;">
                        <div class="order-summary">
                           <h4>Order Summary</h4>
                        </div>
                        <div class="row subtotal-details carttotal-cols">
                           <div class="col-xs-6 carttotal-label">Subtotal</div>
                           <div class="col-xs-6 carttotal-price">$440.00</div>
                        </div>
                        <div class="row total-details carttotal-cols">
                           <div class="col-xs-6 carttotal-label">Total</div>
                           <div class="col-xs-6 carttotal-price">$440.00</div>
                        </div>
                        <div class="checkout-btns">
                           <a href="checkout.asp?step=1" class="btn btn-primary btn-checkout">Proceed to Checkout</a>
                        </div>
                     </div>
                     <div id="thirdPartyPayment" class="checkout-options third-party-payment" style="">
                        <span class="checkout-options-title"><span>Or checkout with:</span></span>
                        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                        <script>
                           var strToken2;
                           var strResult;
                           var strRetToken = "";
                           var reportError;

                           paypal.Button.render({
                           env: 'production',
                           commit: true, // Show a 'Pay Now' button
                           style: {
                               layout: 'vertical',   // horizontal | vertical
                               size: 'medium',     // medium | large | responsive
                               shape: 'rect',    // pill | rect
                               color: 'gold',     // gold | blue | silver | black
                               fundingicons: false
                           },

                           funding: {
                               allowed: [paypal.FUNDING.CREDIT],
                               disallowed: [paypal.FUNDING.CARD]
                           },

                           payment: function(data, actions)
                           {
                               jQuery.ajax({
                                   url: 'paypal_express.asp?ch=0&ajaxpp=1&originCheckout=0',
                                   dataType: 'html',
                                   type: 'POST',
                                   async: false,
                                   cache: false,
                                   success: function (strResult) {
                                       strRetToken = strResult;
                                   },
                                   error: reportError
                               });
                               return strRetToken;
                           },

                           onAuthorize: function(data, actions)
                           {

                               jQuery.ajax({
                                   url: 'paypal_express.asp?ajaxpp=1&token=' + strRetToken,
                                   dataType: 'html',
                                   type: 'POST',
                                   async: false,
                                   cache: false,
                                   success: function (strResult) {
                                       strRetURL = strResult;
                                   },
                                   error: reportError
                               });
                               if (strRetURL !== '')
                                   window.location.href = strRetURL;
                               else
                                   alert("Error processing Paypal request. Please, try again.");

                           },

                           onCancel: function(data, actions) {},
                           onError: function(err) {}


                           }, '#paypal-button');
                        </script>
                        <div id="paypal-button">
                           <div id="zoid-paypal-button-4f547842e7" class="paypal-button paypal-button-context-iframe paypal-button-label-paypal paypal-button-size-medium paypal-button-layout-vertical" style="height: 92px;">
                              <style>
                                 #zoid-paypal-button-4f547842e7 {
                                 font-size: 0;
                                 width: 100%;
                                 overflow: hidden;
                                 min-width: 200px;
                                 }
                                 #zoid-paypal-button-4f547842e7.paypal-button-size-responsive {
                                 text-align: center;
                                 }
                                 #zoid-paypal-button-4f547842e7 > .zoid-outlet {
                                 display: inline-block;
                                 min-width: 200px;
                                 max-width: 750px;
                                 position: relative;
                                 }
                                 #zoid-paypal-button-4f547842e7.paypal-button-layout-vertical > .zoid-outlet {
                                 min-width: 200px;
                                 }
                                 #zoid-paypal-button-4f547842e7 > .zoid-outlet {
                                 width:  250px;
                                 height: 35px;
                                 }
                                 #zoid-paypal-button-4f547842e7.paypal-button-size-responsive > .zoid-outlet {
                                 width: 100%;
                                 }
                                 #zoid-paypal-button-4f547842e7 > .zoid-outlet > iframe {
                                 min-width: 100%;
                                 max-width: 100%;
                                 width: 200px;
                                 height: 100%;
                                 position: absolute;
                                 top: 0;
                                 left: 0;
                                 }
                                 #zoid-paypal-button-4f547842e7 > .zoid-outlet > iframe.zoid-component-frame {
                                 z-index: 100;
                                 }
                                 #zoid-paypal-button-4f547842e7 > .zoid-outlet > iframe.zoid-prerender-frame {
                                 transition: opacity .2s linear;
                                 z-index: 200;
                                 }
                                 #zoid-paypal-button-4f547842e7 > .zoid-outlet > iframe.zoid-visible {
                                 opacity: 1;
                                 }
                                 #zoid-paypal-button-4f547842e7 > .zoid-outlet > iframe.zoid-invisible {
                                 opacity: 0;
                                 pointer-events: none;
                                 }
                              </style>
                              <div class="zoid-outlet" style="height: 92px; transition: all 0.5s ease-in-out 0.3s;"><iframe class="zoid-component-frame zoid-visible" frameborder="0" allowtransparency="true" name="xcomponent__ppbutton__4__pmrhk2leei5ceyzvgqytsnrtgzstqirmej2gczzchirhaylzobqwyllcov2hi33oeiwcey3pnvyg63tfnz2faylsmvxhiir2pmrhezlgei5ce5dpoarh2lbcojsw4zdfojigc4tfnz2ceot3ejzgkzrchirhi33qej6syitqojxxa4zchj5se5dzobsseorcojqxoirmej3gc3dvmurdu6zcmvxhmir2ejyhe33eovrxi2lpnyrcyitdn5ww22luei5hi4tvmuwce43upfwgkir2pmrgyylzn52xiir2ej3gk4tunfrwc3bcfqrhg2l2murduitnmvsgs5lneiwce43imfygkir2ejzgky3ueiwcey3pnrxxeir2ejtw63deeiwceztvnzsgs3thnfrw63ttei5gmylmonssyitmmfrgk3bchirhaylzobqwyit5fqrgm5lomruw4zzchj5seylmnrxxozleei5fwitdojswi2luejosyitenfzwc3dmn53wkzbchjnsey3bojscelbcozsw43lpejosyitsmvwwk3lcmvzgkzbchjnse4dbpfygc3bcluwce4tfnvsw2ytfoirdu6zcl5pxi6lqmvpv6ir2ejpv6ztvnzrxi2lpnzpv6it5puwce4dbpfwwk3tuei5hwis7l52hs4dfl5pseorcl5pwm5lomn2gs33ol5pse7jmejxw4qlvorug64tjpjsseot3ejpv65dzobsv6xzchirf6x3govxgg5djn5xf6xzcpuwce33oinqw4y3fnqrdu6zcl5pxi6lqmvpv6ir2ejpv6ztvnzrxi2lpnzpv6it5fqrg63sfojzg64rchj5sex27or4xazk7l4rduis7l5thk3tdoruw63s7l4rh2lbcmrxw2yljnyrduitto5swk5bnnjqw4zjnobzgk5tjmv3s2y3pnuxdgzddmfzhi43un5zgk4zomnxw2irmejzwk43tnfxw4skeei5cenjugrqwiyrxmiyggx3norwtm3tenm3g2zdjeiwceytvor2g63stmvzxg2lpnzeuiir2eiytcytbg5qwkzlcgnpw25dngzxgi2zwnvshcirmejwwk5dbei5hw7jmejsw4ylcnrsu4ylunf3gkq3imvrww33voqrduztbnrzwklbcmnwgszlooqrdu635fqrhg33vojrwkir2ejwwc3tvmfwcelbcobzgkztforrwqtdpm5uw4ir2mzqwy43ffqrhk4demf2gkq3mnfsw45cdn5xgm2lhovzgc5djn5xceotuoj2wklbcmnugky3ln52xivlsnerdu3tvnrwcyitbov2gqq3pmrsseorceiwce33okjsw4zdfoirdu6zcl5pxi6lqmvpv6ir2ejpv6ztvnzrxi2lpnzpv6it5fqrg63sdnruwg2zchj5sex27or4xazk7l4rduis7l5thk3tdoruw63s7l4rh2lbcn5xfezltnf5gkir2pmrf6x3upfygkx27ei5cex27mz2w4y3unfxw4x27ej6syitmn5rwc3dfei5cezlol5kvgirmejwg6z2mmv3gk3bchirhoylsnyrcyitbo5qws5cqn5yhk4ccojuwiz3fei5hwis7l52hs4dfl5pseorcl5pwm5lomn2gs33ol5pse7jmejtwk5cqmftwkvlsnqrdu6zcl5pxi6lqmvpv6ir2ejpv6ztvnzrxi2lpnzpv6it5fqrhizltoqrdu6zcmfrxi2lpnyrduitdnbswg23pov2ce7jmej2wszbchirdizrvgq3tqnbsmu3selbcozsxe43jn5xceorcgqrh27jmejrwq2lmmrcg63lbnfxceorcnb2hi4dthixs653xo4xhaylzobqwyltdn5wselbcnfsceorcmu3dkndggrrgkyzweiwcezdpnvqws3rchirgq5duobztulzpon3wkzlufvvgc3tffvyhezlwnfsxolldn5ws4m3emnqxe5dtorxxezltfzrw63jcpu__" title="PayPal" scrolling="no" allowpaymentrequest="allowpaymentrequest" src="https://www.paypal.com/smart/button?env=production&amp;commit=true&amp;style.layout=vertical&amp;style.size=medium&amp;style.shape=rect&amp;style.color=gold&amp;style.fundingicons=false&amp;style.label=paypal&amp;funding.allowed=credit&amp;funding.disallowed=card%2Cvenmo&amp;funding.remembered=paypal&amp;domain=sweet-jane-preview-com.3dcartstores.com&amp;sessionID=544adb7b0c_mtm6ndk6mdi&amp;buttonSessionID=11ba7aeeb3_mtm6ndk6mdq&amp;locale.x=en_US&amp;logLevel=warn&amp;sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWxvYmplY3RzLmNvbS9hcGkvY2hlY2tvdXQuanMifQ%3D%3D&amp;uid=4f547842e7&amp;version=4&amp;xcomponent=1" style="background-color: transparent;"></iframe></div>
                           </div>
                        </div>
                     </div>
                     <div class="coupons-area cart-detail-item">
                        <h4 class="module-expand" data-target="#apply-coupon">Apply Coupon</h4>
                        <div id="apply-coupon" class="module-content">
                           <div class="coupon-msg">If you have a promotion code enter it here.</div>
                           <div class="apply-cupon clearfix">
                              <input id="coupon_code" type="text" name="coupon_code" class="form-control" data-parsley-maxlength="50" data-parsley-errors-messages-disabled="">
                              <button type="submit" class="btn btn-default">Apply</button>
                           </div>
                        </div>
                     </div>
                     <div id="shipping" class="ShipQuote cart-detail-item">
                        <h4 class="module-expand" data-target="#ShipQuote-module">Calculate Shipping</h4>
                        <div id="ShipQuote-module" class="module-content">
                           <div class="cdi-msg">Enter zip code to calculate shipping.</div>
                           <div class="zip-code clearfix">
                              <input type="text" name="shipping_zip" value="" class="form-control" id="calculate_shipping_zip">
                              <button type="button" class="btn btn-default" id="calculate_button_go">Calculate</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="continue-shopping">
                     <a href="https://sweet-jane-preview-com.3dcartstores.com/product.asp?itemid=15"><i class="icon-left"></i> Continue Shopping</a>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </section>
</section>
