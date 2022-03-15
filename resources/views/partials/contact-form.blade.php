<form action="" method="post" class="contact">
    @csrf

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" id="phone" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="details">Details</label>
                <textarea name="details" id="details" rows="5" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-red">Submit</button>
        </div>

        <div class="col-md-3">
            <ul class="contact-info">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="info-item">Beavercreek OH, 45434</div>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <div class="info-item">(330) 407-3135</div>
                </li>
                <li>
                    <i class="far fa-envelope-open"></i>
                    <div class="info-item">rockhardexcavatingllc@gmail.com</div>
                </li>
                <li>
                    <i class="fab fa-facebook-f"></i>
                    <div class="info-item">@fb-company</div>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <div class="info-item">	Monday - Friday 9:00a - 5:00p</div>
                </li>
            </ul>
        </div>
    </div>
</form>
