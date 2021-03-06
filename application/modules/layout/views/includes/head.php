<?php
	$this->layout->load_view('layout/includes/AdminLTE_Css');
?>
<script src="<?php echo base_url(); ?>assets/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
     //  Dropzone.autoDiscover = false;

    $(function () {
        $('.nav-tabs').tab();
        $('.tip').tooltip();

        $('body').on('focus', ".datepicker", function () {
            $(this).datepicker({
                autoclose: true,
                format: '<?php echo date_format_datepicker(); ?>',
                language: '<?php _trans('cldr'); ?>',
                weekStart: '<?php echo get_setting('first_day_of_week'); ?>',
                todayBtn: "linked"
            });
        });

        $(document).on('click', '.create-invoice', function () {
            $('#modal-placeholder').load("<?php echo site_url('invoices/ajax/modal_create_invoice'); ?>");
        });

        $(document).on('click', '.create-quote', function () {
            $('#modal-placeholder').load("<?php echo site_url('quotes/ajax/modal_create_quote'); ?>");
        });

        $(document).on('click', '#btn_quote_to_invoice', function () {
            var quote_id = $(this).data('quote-id');
            $('#modal-placeholder').load("<?php echo site_url('quotes/ajax/modal_quote_to_invoice'); ?>/" + quote_id);
        });

        $(document).on('click', '#btn_copy_invoice', function () {
            var invoice_id = $(this).data('invoice-id');
            $('#modal-placeholder').load("<?php echo site_url('invoices/ajax/modal_copy_invoice'); ?>", {invoice_id: invoice_id});
        });

        $(document).on('click', '#btn_create_credit', function () {
            var invoice_id = $(this).data('invoice-id');
            $('#modal-placeholder').load("<?php echo site_url('invoices/ajax/modal_create_credit'); ?>", {invoice_id: invoice_id});
        });

        $(document).on('click', '#btn_copy_quote', function () {
            var quote_id = $(this).data('quote-id');
            var client_id = $(this).data('client-id');
            $('#modal-placeholder').load("<?php echo site_url('quotes/ajax/modal_copy_quote'); ?>", {
                quote_id: quote_id,
                client_id: client_id
            });
        });

        $(document).on('click', '.client-create-invoice', function () {
            var client_id = $(this).data('client-id');
            $('#modal-placeholder').load("<?php echo site_url('invoices/ajax/modal_create_invoice'); ?>", {client_id: client_id});
        });

        $(document).on('click', '.client-create-quote', function () {
            var client_id = $(this).data('client-id');
            $('#modal-placeholder').load("<?php echo site_url('quotes/ajax/modal_create_quote'); ?>", {client_id: client_id});
        });

        $(document).on('click', '.invoice-add-payment', function () {
            invoice_id = $(this).data('invoice-id');
            invoice_balance = $(this).data('invoice-balance');
            invoice_payment_method = $(this).data('invoice-payment-method');
            $('#modal-placeholder').load("<?php echo site_url('payments/ajax/modal_add_payment'); ?>", {
                invoice_id: invoice_id,
                invoice_balance: invoice_balance,
                invoice_payment_method: invoice_payment_method
            });
        });

    });
</script>
