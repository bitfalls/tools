<?php

require_once '../../common/header.php';

?>

<form>
    <p>
        Use this tool to convert Litecoin addresses from their new format to the old. Some exchanges still don't support the new format, which is where this comes in handy.
    </p>
    <hr>
    <div>
        <label for="address">Old address format:</label>
    </div>
    <div>
        <input id="address" class="centerlong" size="40" value="">
    </div>
    <div class="col-md-12">
        <button class="submit" type="button" onclick="convert();">Convert</button>
    </div>
    <h3 id="message"></h3>
</form>

<?php

require_once '../../common/footer.php';

?>

<script src="/js/bitcoinjs.min.js"></script>
