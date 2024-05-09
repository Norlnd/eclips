
    <h1 class="heading" style="padding-top: 10rem; text-align: center">Make a Reservation</h1>
    <br />
    <h6 class="sub-heading" style="text-align: center">To help us find the best table for you, select the preferred party size, date, and time of your reservation.</h6>

    <div class="container">
      <div class="row" style="display: flex; justify-content: center">
        <div class="col">
          <label for="PartySize">PartySize</label>
        </div>
        <div class="col">
          <label for="Date">Date</label>
        </div>
        <div class="col">
          <label for="Time">Time</label>
        </div>
      </div>
      <div class="row" style="display: flex; justify-content: center">
        <div class="col">
          <select id="ps" style="width: 75%">
            <optgroup label="PartySize">
              <option value="1">1 Orang</option>
              <option value="2">2 Orang</option>
              <option value="3">3 Orang</option>
              <option value="4">4 Orang</option>
              <option value="5">5 Orang</option>
              <option value="6">6 Orang</option>
            </optgroup>
          </select>
        </div>
        <div class="col">
          <input type="date" style="width: 75%" />
        </div>
        <div class="col">
          <select id="time" style="width: 75%">
            <optgroup label="Time">
              <option value="1">11:00 AM</option>
              <option value="2">13:00 PM</option>
              <option value="3">15:00 PM</option>
              <option value="4">17:00 PM</option>
              <option value="5">19:00 PM</option>
              <option value="6">20:00 PM</option>
            </optgroup>
          </select>
        </div>
        <br>
        <br>
      <div class="row" style="display: flex; justify-content: center; padding-top: 5rem"></div>
    </div>
    <!--  -->
    <div class="fixed-top">
      <div class="toaste">
        <div class="toaste-content">
          <i class="fas fa-solid fa-check check"></i>
          <div class="message">
            <span class="text text-1">Success</span>
            <span class="text text-2">pesanan telah masuk</span>
          </div>
        </div>
        <i class="fa-solid fa-xmark close"></i>
        <div class="progress"></div>
      </div>
    </div>
    <div style="display: flex; justify-content: center">
      <button type="button" id="niko" class="btn btn-outline-primary" style="margin-top: 2rem; width: 150px">Reserve Now</button>
    </div>