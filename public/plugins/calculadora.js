
    function igual() {
        switch (document.getElementsByName('operacion')[0].value) {
            case ("suma"):
                document.getElementsByName('calc')[0].value = parseInt(document.getElementsByName('resultado')[0].value) + parseInt(document.getElementsByName('calc')[0].value);
                break;
            case ("resta"):
                document.getElementsByName('calc')[0].value = parseInt(document.getElementsByName('resultado')[0].value) - parseInt(document.getElementsByName('calc')[0].value);
                break;
            case ("multiplicacion"):
                document.getElementsByName('calc')[0].value = parseInt(document.getElementsByName('resultado')[0].value) * parseInt(document.getElementsByName('calc')[0].value);
                break;
            case ("division"):
                document.getElementsByName('calc')[0].value = parseInt(document.getElementsByName('resultado')[0].value) / parseInt(document.getElementsByName('calc')[0].value);
                break;

            default:
                break;
        }

    }

    function suma() {
        document.getElementsByName('resultado')[0].value = document.getElementsByName('calc')[0].value;
        document.getElementsByName('calc')[0].value = "0";
        document.getElementsByName('operacion')[0].value = "suma";
    }

    function resta() {
        document.getElementsByName('resultado')[0].value = document.getElementsByName('calc')[0].value;
        document.getElementsByName('calc')[0].value = "0";
        document.getElementsByName('operacion')[0].value = "resta";
    }

    function multiplicacion() {
        document.getElementsByName('resultado')[0].value = document.getElementsByName('calc')[0].value;
        document.getElementsByName('calc')[0].value = "0";
        document.getElementsByName('operacion')[0].value = "multiplicacion";
    }

    function division() {
        document.getElementsByName('resultado')[0].value = document.getElementsByName('calc')[0].value;
        document.getElementsByName('calc')[0].value = "0";
        document.getElementsByName('operacion')[0].value = "division";
    }

    function calc0() {
        if (document.getElementsByName('calc')[0].value == "0") {
            document.getElementsByName('calc')[0].value = "0";
        } else {
            document.getElementsByName('calc')[0].value = document.getElementsByName('calc')[0].value + "0";
        }
    }

    function calc1() {
        if (document.getElementsByName('calc')[0].value == "0") {
            document.getElementsByName('calc')[0].value = "1";
        } else {
            document.getElementsByName('calc')[0].value = document.getElementsByName('calc')[0].value + "1";
        }
    }

    function calc2() {
        if (document.getElementsByName('calc')[0].value == "0") {
            document.getElementsByName('calc')[0].value = "2";
        } else {
            document.getElementsByName('calc')[0].value = document.getElementsByName('calc')[0].value + "2";
        }
    }

    function calc3() {
        if (document.getElementsByName('calc')[0].value == "0") {
            document.getElementsByName('calc')[0].value = "3";
        } else {
            document.getElementsByName('calc')[0].value = document.getElementsByName('calc')[0].value + "3";
        }
    }

    function calc4() {
        if (document.getElementsByName('calc')[0].value == "0") {
            document.getElementsByName('calc')[0].value = "4";
        } else {
            document.getElementsByName('calc')[0].value = document.getElementsByName('calc')[0].value + "4";
        }
    }

    function calc5() {
        if (document.getElementsByName('calc')[0].value == "0") {
            document.getElementsByName('calc')[0].value = "5";
        } else {
            document.getElementsByName('calc')[0].value = document.getElementsByName('calc')[0].value + "5";
        }
    }

    function calc6() {
        if (document.getElementsByName('calc')[0].value == "0") {
            document.getElementsByName('calc')[0].value = "6";
        } else {
            document.getElementsByName('calc')[0].value = document.getElementsByName('calc')[0].value + "6";
        }
    }

    function calc7() {
        if (document.getElementsByName('calc')[0].value == "0") {
            document.getElementsByName('calc')[0].value = "7";
        } else {
            document.getElementsByName('calc')[0].value = document.getElementsByName('calc')[0].value + "7";
        }
    }

    function calc8() {
        if (document.getElementsByName('calc')[0].value == "0") {
            document.getElementsByName('calc')[0].value = "8";
        } else {
            document.getElementsByName('calc')[0].value = document.getElementsByName('calc')[0].value + "8";
        }
    }

    function calc9() {
        if (document.getElementsByName('calc')[0].value == "0") {
            document.getElementsByName('calc')[0].value = "9";
        } else {
            document.getElementsByName('calc')[0].value = document.getElementsByName('calc')[0].value + "9";
        }
    }
