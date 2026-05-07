<?php
include('header.php');
$service = isset($_GET['service']) ? htmlspecialchars($_GET['service']) : '';
$package = isset($_GET['package']) ? htmlspecialchars($_GET['package']) : '';
$message = 'Hello Reya, I would like to book';
if ($service) {
    $message .= ' service: ' . $service;
}
if ($package) {
    $message .= ' package: ' . $package;
}
$whatsappUrl = 'https://wa.me/919842048388?text=' . rawurlencode($message);
?>

<!-- PAGE HERO -->
<section class="page-hero" style="height: 320px;">
    <div class="container">
        <h1 style="font-size: 3.5rem;">Secure Your Slot</h1>
        <p>Connect with Reya directly on WhatsApp to book your preferred service or package.</p>
    </div>
</section>

<!-- BOOKING INFO -->
<section class="booking-section">
    <div class="container">
        <div class="booking-container">
            <div class="section-header">
                <h2>Book via WhatsApp</h2>
                <p>Click the button below to chat with Reya and confirm your appointment instantly.</p>
            </div>
            <div style="text-align:center; margin-top: 30px;">
                <p style="color: var(--text-muted); margin-bottom: 30px; max-width: 760px; margin-left:auto; margin-right:auto;">Selected service: <strong><?php echo $service ?: 'Not selected'; ?></strong><br>
                Selected package: <strong><?php echo $package ?: 'Not selected'; ?></strong></p>
                <a href="<?php echo $whatsappUrl; ?>" target="_blank" class="btn btn-primary" style="padding: 16px 28px; font-size: 1rem;">Send Message on WhatsApp</a>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
