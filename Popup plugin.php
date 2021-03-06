<div class="callfor-popup">
   <h2>Popup Modal</h2>
</div>
<script>
   require(
       [
           'jquery',
           'Magento_Ui/js/modal/modal'
       ],
       function (
           $,
           modal
       ) {
           var modaloption = {
               type: 'popup',
               modalClass: 'modal-popup',
               responsive: true,
               innerScroll: true,
               clickableOverlay: true,
               title: 'Popup Modal'
           };
           var callforoption = modal(modaloption, $('.callfor-popup'));
           $('.callfor-popup').modal('openModal');
       }
   );
</script>