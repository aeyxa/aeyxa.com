@extends('layouts.app')

<link rel="stylesheet" href="/css/pageStyle.css">

@section('content')
<div class="container">

    <div style="margin-top:34%;text-align:center;color:a4a4a4;">
        <span style="font-style:italic;">
            Please wait 10 seconds.
        </span>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
<script src="/js/display.js"></script>

<script type="text/javascript">
// redirect after 10 seconds
(function(){setTimeout(function(){window.location="/wiki/display";},11000);})();
</script>
@endsection
