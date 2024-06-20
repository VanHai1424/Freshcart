class PasswordToggler {
    constructor(s, e) {
        this.passwordElements = document.getElementsByClassName(s), this.togglerElements = document.getElementsByClassName(e), this.attachEventListeners()
    }
    attachEventListeners() {
        for (let s = 0; s < this.togglerElements.length; s++) this.togglerElements[s].addEventListener("click", () => {
            this.showHidePassword(s)
        })
    }
    showHidePassword(s) {
        var e = this.passwordElements[s],
            s = this.togglerElements[s];
        "password" === e.type ? (e.setAttribute("type", "text"), s.classList.add("bi-eye"), s.classList.remove("bi-eye-slash")) : (s.classList.remove("bi-eye"), s.classList.add("bi-eye-slash"), e.setAttribute("type", "password"))
    }
}
const passwordToggler = new PasswordToggler("fakePassword", "passwordToggler");