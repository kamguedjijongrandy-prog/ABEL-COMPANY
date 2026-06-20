<?php
$selectedModel = $_GET['model'] ?? 'model1';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABEL COMPANY — Build Your Brochure</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="header">
    <div class="container">
        <div class="logo">
            <img src="./assets/images/GOOD.png" alt="ABEL COMPANY Logo">
        </div>

        <div class="nav">
            <a href="index.php">Home</a>
            <a href="test.php" class="btn-small">Create Yours</a>
        </div>
    </div>
</div>

<div class="builder">
    <div class="container">

        <h1>Start Creating Today</h1>
        <p class="page-sub">Pick a template and fill in your business information.</p>

        <!-- FORM START -->
        <form action="generate.php" method="POST" enctype="multipart/form-data">

            <!-- STEP 1 -->
            <div class="form-section">
                <h2>Step 1: Choose a Template</h2>

                <label class="model-option">
                    <input
                        type="radio"
                        name="model"
                        value="model1"
                        <?php echo $selectedModel === 'model1' ? 'checked' : ''; ?>
                    >
                    <span class="model-preview box-1">Model 1</span>
                    <span>Model 1 — Classic</span>
                </label>

                <label class="model-option">
                    <input
                        type="radio"
                        name="model"
                        value="model2"
                        <?php echo $selectedModel === 'model2' ? 'checked' : ''; ?>
                    >
                    <span class="model-preview box-2">Model 2</span>
                    <span>Model 2 — Modern</span>
                </label>

                <label class="model-option">
                    <input
                        type="radio"
                        name="model"
                        value="model3"
                        <?php echo $selectedModel === 'model3' ? 'checked' : ''; ?>
                    >
                    <span class="model-preview box-1">Model 3</span>
                    <span>Model 3 — Business</span>
                </label>
            </div>

            <!-- STEP 2 -->
            <div class="form-section">
                <h2>Step 2: Your Information</h2>

                <div class="field">
                    <label for="name">Full Name *</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Michael Abel"
                        required
                    >
                </div>

                <div class="field">
                    <label for="company">Company Name</label>
                    <input
                        type="text"
                        id="company"
                        name="company"
                        placeholder="ABEL COMPANY"
                    >
                </div>

                <div class="field">
                    <label for="tagline">Tagline / Slogan</label>
                    <input
                        type="text"
                        id="tagline"
                        name="tagline"
                        placeholder="Helping Businesses Grow"
                    >
                </div>

                <div class="row">
                    <div class="field">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="info@abelcompany.com"
                        >
                    </div>

                    <div class="field">
                        <label for="phone">Phone</label>
                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="+237 6XX XXX XXX"
                        >
                    </div>
                </div>

                <div class="field">
                    <label for="address">Business Address</label>
                    <input
                        type="text"
                        id="address"
                        name="address"
                        placeholder="Yaoundé, Cameroon"
                    >
                </div>

                <div class="field">
                    <label for="website">Website</label>
                    <input
                        type="url"
                        id="website"
                        name="website"
                        placeholder="https://www.abelcompany.com"
                    >
                </div>

                <div class="field">
                    <label for="description">Business Description</label>
                    <textarea
                        id="description"
                        name="description"
                        rows="5"
                        placeholder="Tell visitors about your business..."
                    ></textarea>
                </div>
            </div>

            <!-- STEP 3 -->
            <div class="form-section">
                <h2>Step 3: Choose Your Colours</h2>

                <div class="row">
                    <div class="field">
                        <label for="primary-color">Primary Colour</label>
                        <input
                            type="color"
                            id="primary-color"
                            name="primary_color"
                            value="#3B82F6"
                        >
                    </div>

                    <div class="field">
                        <label for="secondary-color">Secondary Colour</label>
                        <input
                            type="color"
                            id="secondary-color"
                            name="secondary_color"
                            value="#1E3A5F"
                        >
                    </div>
                </div>
            </div>

            <!-- STEP 4 -->
            <div class="form-section">
                <h2>Step 4: Upload Your Logo</h2>

                <div class="field">
                    <label for="logo">Logo Image</label>
                    <input
                        type="file"
                        id="logo"
                        name="logo"
                        accept="image/png,image/jpeg,image/jpg"
                    >

                    <p class="hint">
                        Accepted formats: PNG, JPG, JPEG. Maximum size: 2MB.
                    </p>
                </div>
            </div>

            <!-- STEP 5 -->
            <div class="form-section">
                <h2>Step 5: Additional Details</h2>

                <div class="field">
                    <label for="services">Services Offered</label>
                    <textarea
                        id="services"
                        name="services"
                        rows="4"
                        placeholder="Web Design, Branding, Marketing..."
                    ></textarea>
                </div>

                <div class="field">
                    <label for="mission">Mission Statement</label>
                    <textarea
                        id="mission"
                        name="mission"
                        rows="4"
                        placeholder="Our mission is to help businesses grow."
                    ></textarea>
                </div>
            </div>

            <!-- SUBMIT BUTTON -->
            <div class="form-section action-row">
                <button type="submit" class="btn">
                    Generate My Brochure
                </button>
            </div>

        </form>
        <!-- FORM END -->

    </div>
</div>

<div class="footer">
    <div class="container">
        <p>© 2026 ABEL COMPANY. All rights reserved.</p>
    </div>
</div>

</body>
</html>
