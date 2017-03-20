<script>
       // S. NProgress
       NProgress.configure({ showSpinner: false });
       NProgress.start();
       setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 800);

       $("#b-0").click(function() { NProgress.start(); });
       $("#b-40").click(function() { NProgress.set(0.4); });
       $("#b-inc").click(function() { NProgress.inc(); });
       $("#b-100").click(function() { NProgress.done(); });
       // E. NProgress
</script>
