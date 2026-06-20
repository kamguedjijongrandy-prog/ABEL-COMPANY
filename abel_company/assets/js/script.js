javascript
/**
 * Flytify Brochure Generator — JavaScript
 *
 * Features:
 * ✓ Primary colour swatch preview
 * ✓ Secondary colour swatch preview
 * ✓ Full Name validation
 * ✓ Logo image preview
 * ✓ Tagline character counter
 */

document.addEventListener('DOMContentLoaded', function () {

    // ─── PRIMARY COLOUR ─────────────────────────
    var primaryInput = document.getElementById('primary-color');
    var primarySwatch = document.getElementById('primary-swatch');

    if (primaryInput && primarySwatch) {
        primarySwatch.style.backgroundColor = primaryInput.value;

        primaryInput.addEventListener('input', function () {
            primarySwatch.style.backgroundColor = this.value;
        });
    }

    // ─── SECONDARY COLOUR ───────────────────────
    var secondaryInput = document.getElementById('secondary-color');
    var secondarySwatch = document.getElementById('secondary-swatch');

    if (secondaryInput && secondarySwatch) {
        secondarySwatch.style.backgroundColor = secondaryInput.value;

        secondaryInput.addEventListener('input', function () {
            secondarySwatch.style.backgroundColor = this.value;
        });
    }

    // ─── LOGO PREVIEW ───────────────────────────
    var logoInput = document.getElementById('logo');
    var logoPreview = document.getElementById('logo-preview');

    if (logoInput && logoPreview) {
        logoInput.addEventListener('change', function () {

            var file = this.files[0];

            if (!file) {
                logoPreview.style.display = 'none';
                return;
            }

            var reader = new FileReader();

            reader.onload = function (e) {
                logoPreview.src = e.target.result;
                logoPreview.style.display = 'block';
            };

            reader.readAsDataURL(file);
        });
    }

    // ─── FORM VALIDATION ────────────────────────
    var form = document.querySelector('form');

    if (form) {
        form.addEventListener('submit', function (e) {

            var fullName = document.getElementById('full-name');

            if (!fullName || fullName.value.trim() === '') {
                e.preventDefault();
                alert('Please enter your Full Name.');
                fullName.focus();
                return false;
            }
        });
    }

    // ─── TAGLINE COUNTER ────────────────────────
    var taglineInput = document.getElementById('tagline');
    var taglineCounter = document.getElementById('tagline-counter');

    if (taglineInput && taglineCounter) {

        function updateCounter() {
            var count = taglineInput.value.length;
            taglineCounter.textContent = count + ' / 100 characters';
        }

        updateCounter();

        taglineInput.addEventListener('input', updateCounter);
    }

});
