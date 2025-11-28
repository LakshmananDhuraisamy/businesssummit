<?php include 'header.php'; ?>
<header class="event-header">
  <h1 class="event-title">Business Success Summit</h1>
  <p class="event-subtitle">India’s Most Transformational Event for Entrepreneurs</p>
  <p class="event-description">
    A powerful one-day experience designed to activate success mindset, provide business clarity, and connect participants with expert guidance.
  </p>
</header>

 <section class="learn-section">
    <h2 class="learn-title">What You Will Learn</h2>
    <div class="cards-container">
      <div class="learn-card">Affirmation technique for business success</div>
      <div class="learn-card">How to restart or scale your business</div>
      <div class="learn-card">How to overcome fear &amp; confusion</div>
      <div class="learn-card">How to build clarity and action plans</div>
      <div class="learn-card">How to find opportunities and direction</div>
    </div>
  </section>

<section class="event-sessions">

  <h2>Event Sessions</h2>

  <!-- TAB BUTTONS -->
  <div class="session-tabs">
    <button class="tab-btn active" onclick="openSession('morning-tab')">Morning</button>
    <button class="tab-btn" onclick="openSession('afternoon-tab')">Afternoon</button>
    <button class="tab-btn" onclick="openSession('evening-tab')">Evening</button>
  </div>

  <!-- MORNING TAB -->
  <div id="morning-tab" class="session-content">
  
    <ul>
      <li>Registration</li>
      <li>Mindset block identification</li>
      <li>Affirmation technique</li>
      <li>Confidence building</li>
    </ul>
  </div>

  <!-- AFTERNOON TAB -->
  <div id="afternoon-tab" class="session-content" style="display:none;">
  
    <ul>
      <li>Business basics</li>
      <li>Strategy guidance</li>
      <li>Panel session (Success Mentor, Tech Head, Investor, Global Ops Head)</li>
    </ul>
  </div>

  <!-- EVENING TAB -->
  <div id="evening-tab" class="session-content" style="display:none;">
    
    <ul>
      <li>90-day success plan</li>
      <li>Networking</li>
      <li>Community onboarding</li>
    </ul>
  </div>

</section>

<script>
  function openSession(tabId) {
    // hide all tabs
    document.querySelectorAll(".session-content").forEach(c => c.style.display = "none");
    // remove active from all buttons
    document.querySelectorAll(".tab-btn").forEach(b => b.classList.remove("active"));
    // show selected tab
    document.getElementById(tabId).style.display = "block";
    // add active class to clicked button
    event.target.classList.add("active");
  }
</script>

<!-- Cities We Cover + CTA -->
<section class="cities-cover" aria-labelledby="cities-title">
  <div class="cities-inner">
    <h2 id="cities-title">Cities We Cover</h2>

    <p class="cities-list" aria-hidden="false">
      <span class="city">Bengaluru</span>
      <span class="city">Hyderabad</span>
      <span class="city">Mumbai</span>
      <span class="city">Pune</span>
      <span class="city">Chennai</span>
      <span class="city">Delhi NCR</span>
      <span class="city">Ahmedabad</span>
      <span class="city">Jaipur</span>
      <span class="city">Surat</span>
      <span class="city">Coimbatore</span>
     
    </p>

    <a class="cta-btn" href="http://localhost/conf-bkup/contact" role="button" aria-label="Book your summit ticket">
      Book Your Summit Ticket &rarr;
    </a>
  </div>
</section>
 
   <?php include 'footer.php'; ?>