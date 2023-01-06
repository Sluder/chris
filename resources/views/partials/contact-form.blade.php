<form action="{{ route('submit.contact') }}" method="post" class="contact pb-4">
    @csrf

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" id="phone" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="category">Type of Work</label>
                        <select name="category" class="form-control">
                            <option value="Register To Win">Register To Win</option>
                            <option value="Kitchen">Kitchen</option>
                            <option value="Bathroom">Bathroom</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Plumbing">Plumbing</option>
                            <option value="Pole Barn">Pole Barn</option>
                            <option value="Deck">Deck</option>
                            <option value="Whole House Remodel">Whole House Remodel</option>
                            <option value="Room Remodel">Room Remodel</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="details">What can we help you with?</label>
                <textarea name="details" id="details" rows="5" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-yellow">Send</button>
        </div>

        <div class="col-md-3">
            <ul class="contact-info">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="info-item">Cleveland OH, 44113</div>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <div class="info-item">(330) 418-6616</div>
                </li>
                <li>
                    <i class="far fa-envelope-open"></i>
                    <div class="info-item">cmiloproductions@gmail.com</div>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <div class="info-item">Monday - Friday 9:00a - 5:00p</div>
                </li>
            </ul>
        </div>
    </div>
</form>
