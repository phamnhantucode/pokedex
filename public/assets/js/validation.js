

function Validation(options) {
    var formEle = document.querySelector(options.form);

    function getFormGroup(inputEle, selector) {
        while (inputEle.parentElement) {

            if (inputEle.parentElement.matches(selector)) {
                return inputEle.parentElement;
            }
            inputEle = inputEle.parentElement;
        }
    }

    //check hết rules
    var collectRule = {};

    function validate(inputEle, rule) {
        var erEle = inputEle.parentElement.querySelector(options.error);
        var erMassage;
        console.log(typeof inputEle.parentElement);
        var rules = collectRule[rule.selector];

        for (var i = 0; i < rules.length; i++) {
            erMassage = rules[i](inputEle.value);
            if (erMassage) break;
        }

        if (erMassage) {
            erEle.innerText = erMassage;
        } else {
            erEle.innerText = "";
        }
    }

    if (formEle) {
        //xu li nguyen form khi nhan button 
        formEle.onsubmit = function (e) {
            e.preventDefault();
            options.rules.forEach(rule => {
                var inputEle = document.querySelector(rule.selector);
                validate(inputEle, rule);
            })
        }

        //xu li tung rule
        options.rules.forEach(rule => {
            var inputEle = document.querySelector(rule.selector);
            inputEle.onblur = function () {
                validate(inputEle, rule);
            }
            inputEle.oninput = function () {
                var erEle = inputEle.parentElement.querySelector(options.error);
                erEle.innerText = "";
            }

            if (Array.isArray(collectRule[rule.selector])) {
                collectRule[rule.selector].push(rule.test);
            } else {
                collectRule[rule.selector] = [rule.test];
            }
        });
    }

}

//định nghĩa các rule, khi đúng thì kh ra lỗi
//còn sai thì thông báo lỗi 
Validation.isRequired = function (selector) {
    return ({
        selector,
        test: function (value) {
            return value.trim() ? undefined : "vui lòng nhập ở đây";
        }
    })
}
Validation.minLength = function (selector, minLength) {
    return ({
        selector,
        test: function (value) {
            return value.length < minLength ? "nhập lại mật khẩu" : undefined;
        }
    })
}
Validation.confirm = function (selector, getPassValue) {
    return ({
        selector,
        test: function (value) {
            return value === getPassValue() ? undefined : "không trùng khớp";
        }
    })
}