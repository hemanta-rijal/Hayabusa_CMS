function toggleLoader() {
    let load_screen = document.getElementById("load_screen");
    if (load_screen.style.display === "none") {
        load_screen.style.display = "block";
    } else {
        load_screen.style.display = "none";
    }
}

// window.addEventListener("DOMContentLoaded", function () {
document.addEventListener('readystatechange', e => {
    if (document.readyState === "complete") {
        console.log("Load event triggered");
        toggleLoader()

        const layoutName = 'Semi Dark Menu';

        const settingsObject = {
            admin: 'Cork Admin Template', settings: {
                layout: {
                    name: layoutName, toggle: false, darkMode: false, boxed: false,
                }
            }, reset: false
        }


        if (settingsObject.reset) {
            localStorage.clear()
        }

        if (localStorage.length === 0) {
            corkThemeObject = settingsObject;
        } else {

            getcorkThemeObject = localStorage.getItem("theme");
            getParseObject = JSON.parse(getcorkThemeObject)
            ParsedObject = getParseObject;

            if (getcorkThemeObject !== null) {

                if (ParsedObject.admin === 'Cork Admin Template') {

                    if (ParsedObject.settings.layout.name === layoutName) {

                        corkThemeObject = ParsedObject;
                    } else {
                        corkThemeObject = settingsObject;
                    }

                } else {
                    if (ParsedObject.admin === undefined) {
                        corkThemeObject = settingsObject;
                    }
                }

            } else {
                corkThemeObject = settingsObject;
            }
        }

        // Get Dark Mode Information i.e darkMode: true or false
        localStorage.setItem("theme", JSON.stringify(corkThemeObject));
        getcorkThemeObject = localStorage.getItem("theme");
        getParseObject = JSON.parse(getcorkThemeObject)

        if (!getParseObject.settings.layout.darkMode) {
            ifStarterKit = document.body.getAttribute('page') === 'starter-pack' ? true : false;
            document.body.classList.remove('dark');

        }

        // Get Layout Information i.e boxed: true or false
        localStorage.setItem("theme", JSON.stringify(corkThemeObject));
        getcorkThemeObject = localStorage.getItem("theme");
        getParseObject = JSON.parse(getcorkThemeObject)

        if (!getParseObject.settings.layout.boxed) {

            if (document.body.getAttribute('layout') !== 'boxed') {
                document.body.classList.remove('layout-boxed');
                if (document.querySelector('.header-container')) {
                    document.querySelector('.header-container').classList.remove('container-xxl');
                }
                if (document.querySelector('.middle-content')) {
                    document.querySelector('.middle-content').classList.remove('container-xxl');
                }
            } else {
                document.body.classList.add('layout-boxed');
                if (document.querySelector('.header-container')) {
                    // document.querySelector('.header-container').classList.add('container-xxl');
                }
                if (document.querySelector('.middle-content')) {
                    document.querySelector('.middle-content').classList.add('container-xxl');
                }
            }
        }
    }
});

