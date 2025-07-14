<?php
// layout/cookies.php - this can contain your custom HTML or styles for cookies (optional)
include('layout/cookies.php');
?>

<!-- Cookie Consent Script -->
<script>
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    // Initialize cookie consent plugin
    var cc = initCookieConsent();

    cc.run({
        current_lang: 'en',
        autoclear_cookies: true,
        page_scripts: true,

        gui_options: {
            consent_modal: {
                layout: 'cloud',
                position: 'bottom center',
                transition: 'slide',
                swap_buttons: false
            },
            settings_modal: {
                layout: 'box',
                transition: 'slide'
            }
        },

        onChange: function(cookie, changed_preferences) {},

        onAccept: function(cookie) {
            if (!getCookie('cookie_consent_logged')) {
                var cookieLevel = cookie.level;
                $.ajax({
                    url: '#', // Replace with your actual endpoint
                    dataType: 'json',
                    data: {
                        cookie: cookieLevel,
                    },
                });
                setCookie('cookie_consent_logged', '1', 182, '/');
            }
        },

        languages: {
            'en': {
                consent_modal: {
                    title: parsed.cookie_title,
                    description: parsed.cookie_description + ' <button type="button" data-cc="c-settings" class="cc-link">Let me choose</button>',
                    primary_btn: {
                        text: 'Accept all',
                        role: 'accept_all'
                    },
                    secondary_btn: {
                        text: 'Reject all',
                        role: 'accept_necessary'
                    },
                },
                settings_modal: {
                    title: 'Cookie preferences',
                    save_settings_btn: 'Save settings',
                    accept_all_btn: 'Accept all',
                    reject_all_btn: 'Reject all',
                    close_btn_label: 'Close',
                    cookie_table_headers: [
                        { col1: 'Name' },
                        { col2: 'Domain' },
                        { col3: 'Expiration' },
                        { col4: 'Description' }
                    ],
                    blocks: [
                        {
                            title: parsed.cookie_title + ' 📢',
                            description: parsed.cookie_description + '.'
                        },
                        {
                            title: parsed.strictly_cookie_title,
                            description: parsed.strictly_cookie_description,
                            toggle: {
                                value: 'necessary',
                                enabled: true,
                                readonly: true
                            }
                        },
                        {
                            title: 'More information',
                            description: 'For any queries in relation to our policy on cookies and your choices, please <a class="cc-link" href="#">contact us</a>.'
                        }
                    ]
                }
            }
        }
    });
</script>
