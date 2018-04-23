<?php

require_once '../../common/header.php';

?>

    <form class="etherconvert" autocomplete="off">
        <p>
            Use this tool to convert from one amount of Ether to another. Useful when developing smart contracts as most will accept Ether amounts in Wei (the smallest possible unit).
        </p>
        <hr>
        <div>
            <label for="wei">Wei</label>
                <input type="text" name="wei" id="wei" oninput="calculate(this,642.097,525.526858038)">
        </div>
        <div class="form-group row">
            <label for="kwei">Kwei, Ada, Femtoether</label>
                <input class="form-control" type="text" name="kwei" id="kwei" oninput="calculate(this,642.097,525.526858038)">
        </div>
        <div>
            <label for="mwei">Mwei, Babbage, Picoether</label>
                <input type="text" name="mwei" id="mwei" oninput="calculate(this,642.097,525.526858038)">
        </div>
        <div>
            <label for="gwei" >Gwei, Shannon, Nanoether, Nano</label>
                <input type="text" name="gwei" id="gwei" oninput="calculate(this,642.097,525.526858038)">
        </div>
        <div>
            <label for="szabo">Szabo, Microether, Micro</label>
                <input type="text" name="szabo" id="szabo" oninput="calculate(this,642.097,525.526858038)">
        </div>
        <div>
            <label for="finney">Finney, Milliether, Milli</label>
                <input type="text" name="finney" id="finney" oninput="calculate(this,642.097,525.526858038)">
        </div>
        <div class="mainrow">
            <label for="ether">Ether</label>
                <input type="text" name="ether" id="ether" oninput="calculate(this,642.097,525.526858038)" value="1">
        </div>
        <div>
            <label for="kether">Kether, Grand, Einstein</label>
                <input type="text" name="kether" id="kether" oninput="calculate(this,642.097,525.526858038)">
        </div>
        <div>
            <label for="mether">Mether</label>
                <input type="text" name="mether" id="mether" oninput="calculate(this,642.097,525.526858038)">
        </div>
        <div>
            <label for="gether">Gether</label>
                <input type="text" name="gether" id="gether" oninput="calculate(this,642.097,525.526858038)">
        </div>
        <div>
            <label for="tether">Tether</label>
                <input type="text" name="tether" id="tether" oninput="calculate(this,642.097,525.526858038)">
        </div>
    </form>

    <script src="/js/bignumber.min.js"></script>
    <script src="/js/eth.js"></script>

<?php

require_once '../../common/footer.php';