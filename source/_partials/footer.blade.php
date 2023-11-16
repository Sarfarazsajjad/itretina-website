<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <!-- Dental Billing Services -->
            <div class="col-lg-6">
                <h4 class="text-uppercase mb-4">Our Medical & Dental Billing Services</h4>
                <ul class="list-group list-group-flush bg-dark">
                    <li class="list-group-item bg-dark text-white">Insurance Eligibility Verification</li>
                    <li class="list-group-item bg-dark text-white">Insurance Billing and AR/Collection</li>
                    <li class="list-group-item bg-dark text-white">Patient Follow-ups/Fill the Chair</li>
                    <li class="list-group-item bg-dark text-white">Appointment Scheduling</li>
                    <li class="list-group-item bg-dark text-white">Appointment Confirmation</li>
                    <li class="list-group-item bg-dark text-white">Inbound and Outbound Calls</li>
                </ul>
            </div>
            <!-- Contact Details -->
            <div id="contact" class="col-lg-6">
                <h4 class="text-uppercase mb-4">Contact Details</h4>
                <div class="d-flex flex-column align-items-start">
                    <div class="mb-3">
                        <h5>USA, Texas</h5>
                        <p class="text-white">827 Overdell Dr Sugarland TX 77479<br>
                            +18015574513</p>
                    </div>
                    <div class="mb-3">
                        <h5>Email</h5>
                        <p><a href="mailto:info@itretina.com" class="text-white">info@itretina.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text-center bg-white text-dark">
                <p class="mb-0">Copyright © {{ $page->year }} ITRetina. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
</html>