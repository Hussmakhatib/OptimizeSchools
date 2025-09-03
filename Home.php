<?php
// index.php — OptimizeSchools Home Page
// Minimal PHP used for configurability; mostly semantic, accessible HTML.

// ---------- Basic Config ----------
$site = [
  'name' => 'OptimizeSchools',
  'tagline' => 'Helping Schools Cut Costs with Smarter Technology',
  'primary_cta_text' => 'Book a Free Consultation',
  'primary_cta_href' => '#contact',
  'lead_magnet_title' => 'Free: 20 Quick Wins to Cut School IT Costs',
  'lead_magnet_desc' => 'Get a practical checklist you can use this week to start saving.',
  'email_contact' => 'hello@optimizeschools.com',
  'phone_contact' => '+000 000 0000',
  'location' => 'Global',
  'logo_text' => 'OptimizeSchools',
  'meta_description' => 'We help schools reduce IT and operational costs by 20–30% using smart, practical technology strategies. Audits, cloud migration, workflow automation, and training.'
];

// Fake mini case studies (replace with real ones)
$mini_case_studies = [
  [
    'title' => 'Printing Costs ↓ 80%',
    'context' => 'International School, 900 students',
    'result' => 'Saved $12,000/yr by moving to digital forms & cloud docs.',
  ],
  [
    'title' => 'Licensing Spend ↓ 25%',
    'context' => 'Private K–12, 1,200 students',
    'result' => 'Replaced legacy tools with low-cost, high-impact alternatives.',
  ],
  [
    'title' => 'Server Costs ↓ 40%',
    'context' => 'Multi-campus network',
    'result' => 'Hybrid cloud migration with right-sized storage & backup.',
  ],
];

// Problems we solve
$problems = [
  ['icon' => '💸', 'title' => 'Rising Licensing Costs', 'desc' => 'Audit tools, consolidate vendors, and switch to budget-friendly, compliant alternatives.'],
  ['icon' => '🖨️', 'title' => 'Expensive Printing & Paper', 'desc' => 'Digitize forms & approvals, introduce e-signatures, and implement retention policies.'],
  ['icon' => '🖥️', 'title' => 'On-Prem Server Overheads', 'desc' => 'Move to the cloud (Google/Microsoft), right-size storage, and automate backups.'],
  ['icon' => '🧾', 'title' => 'Manual Admin Workloads', 'desc' => 'Automate attendance, fees, and reporting with low-code workflows and APIs.'],
];

// Services summary (link these to dedicated pages later)
$services = [
  ['title' => 'IT Cost Audit', 'desc' => 'A 360° review to uncover 20–30% savings opportunities.', 'cta' => 'Learn more', 'href' => '#contact'],
  ['title' => 'Cloud Migration & Optimization', 'desc' => 'Migrate to Google Workspace / Microsoft 365 the right way.', 'cta' => 'Learn more', 'href' => '#contact'],
  ['title' => 'Digital Workflow & Automation', 'desc' => 'Replace paper processes with secure, trackable digital flows.', 'cta' => 'Learn more', 'href' => '#contact'],
  ['title' => 'Cybersecurity & Compliance', 'desc' => 'Reduce risk and cost with smart policies and tooling.', 'cta' => 'Learn more', 'href' => '#contact'],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($site['name']) ?> — <?= htmlspecialchars($site['tagline']) ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($site['meta_description']) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($site['name']) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($site['meta_description']) ?>">
  <meta property="og:type" content="website">
  <meta name="theme-color" content="#0d3b66">
  <style>
    :root{
      --bg:#f6f8fb; --card:#ffffff; --ink:#0b1020; --muted:#5b6373;
      --brand:#0d3b66; --brand-2:#1e88e5; --ok:#1b8f5a; --ring:#cfe2ff;
      --radius:16px; --shadow:0 8px 30px rgba(0,0,0,.06);
      --max:1100px;
    }
    *{box-sizing:border-box}
    html,body{margin:0;padding:0;background:var(--bg);color:var(--ink);font:16px/1.6 system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,'Helvetica Neue',Arial}
    a{color:var(--brand-2);text-decoration:none}
    a:hover{text-decoration:underline}
    .container{max-width:var(--max);margin-inline:auto;padding:24px}
    header{position:sticky;top:0;background:rgba(246,248,251,.8);backdrop-filter:saturate(180%) blur(10px);border-bottom:1px solid #e9edf3;z-index:10}
    .nav{display:flex;align-items:center;justify-content:space-between;gap:16px}
    .brand{display:flex;align-items:center;gap:10px;font-weight:800}
    .brand .logo{display:grid;place-items:center;width:36px;height:36px;border-radius:12px;background:linear-gradient(135deg,var(--brand),#2a6db3);color:#fff;font-weight:700}
    .nav a.btn{background:var(--brand);color:#fff;padding:10px 16px;border-radius:10px;box-shadow:var(--shadow)}
    .nav a.btn:hover{filter:brightness(1.05)}
    .hero{padding:64px 0}
    .grid{display:grid;gap:22px}
    @media(min-width:900px){.grid-2{grid-template-columns:1.1fr .9fr}}
    h1{font-size:clamp(28px,4vw,44px);line-height:1.15;margin:0 0 12px}
    h2{font-size:clamp(22px,3vw,32px);margin:0 0 10px}
    p.lead{font-size:18px;color:var(--muted);margin:0 0 18px}
    .card{background:var(--card);border-radius:var(--radius);box-shadow:var(--shadow);padding:22px}
    .pill{display:inline-block;padding:6px 10px;border-radius:999px;background:#eef6ff;color:#0d3b66;font-weight:600;font-size:13px}
    .kpis{display:grid;gap:14px;margin-top:14px}
    @media(min-width:700px){.kpis{grid-template-columns:repeat(3,1fr)}}
    .kpi{border:1px solid #eef2f7;border-radius:12px;padding:14px}
    .kpi b{display:block;font-size:20px}
    .list{display:grid;gap:14px}
    @media(min-width:900px){.list-4{grid-template-columns:repeat(4,1fr)} .list-3{grid-template-columns:repeat(3,1fr)}}
    .problem .ico{font-size:22px}
    .service .title{font-weight:700}
    .process{counter-reset:step}
    .step::before{counter-increment:step;content:counter(step);display:inline-grid;place-items:center;width:36px;height:36px;border-radius:10px;background:#e7f1ff;color:#0d3b66;font-weight:800;margin-right:10px}
    .cta{display:flex;gap:10px;flex-wrap:wrap}
    .cta .btn{background:var(--brand);color:#fff;border:none;padding:12px 18px;border-radius:12px;cursor:pointer}
    .cta .btn.secondary{background:#eaf2ff;color:#0d3b66}
    .form{display:grid;gap:12px}
    input,textarea{width:100%;padding:12px 14px;border:1px solid #e2e8f0;border-radius:10px;background:#fff}
    input:focus,textarea:focus{outline:2px solid var(--ring);border-color:#b6ccf7}
    footer{padding:36px 0;color:#778}
    .muted{color:var(--muted)}
    .inline-badges{display:flex;gap:10px;flex-wrap:wrap}
    .badge{background:#f1f5f9;padding:6px 10px;border-radius:999px;font-size:13px}
  </style>
</head>
<body>
  <header>
    <div class="container nav" aria-label="Primary">
      <div class="brand">
        <div class="logo" aria-hidden="true">OS</div>
        <span><?= htmlspecialchars($site['logo_text']) ?></span>
      </div>
      <nav class="inline-badges" aria-label="Top navigation">
        <a href="#services">Services</a>
        <a href="#cases">Results</a>
        <a href="#process">Process</a>
        <a href="#resources">Resources</a>
        <a class="btn" href="<?= htmlspecialchars($site['primary_cta_href']) ?>"><?= htmlspecialchars($site['primary_cta_text']) ?></a>
      </nav>
    </div>
  </header>

  <main>
    <!-- HERO -->
    <section class="hero">
      <div class="container grid grid-2">
        <div class="card">
          <span class="pill">Education • Cost Optimization</span>
          <h1><?= htmlspecialchars($site['tagline']) ?></h1>
          <p class="lead">We help schools reduce IT and operational costs by <strong>20–30%</strong> without sacrificing quality — through audits, cloud migration, digital workflows, and smart vendor strategies.</p>
          <div class="cta">
            <a class="btn" href="<?= htmlspecialchars($site['primary_cta_href']) ?>"><?= htmlspecialchars($site['primary_cta_text']) ?></a>
            <a class="btn secondary" href="#lead-magnet">Get the Free Checklist</a>
          </div>
          <div class="kpis" aria-label="Mini case studies">
            <?php foreach($mini_case_studies as $c): ?>
              <div class="kpi">
                <b><?= htmlspecialchars($c['title']) ?></b>
                <div class="muted"><?= htmlspecialchars($c['context']) ?></div>
                <div><?= htmlspecialchars($c['result']) ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <aside class="card" role="complementary" aria-label="Key problems we solve">
          <h2>Where schools overspend</h2>
          <div class="list list-4">
            <?php foreach($problems as $p): ?>
              <div class="problem">
                <div class="ico" aria-hidden="true"><?= $p['icon'] ?></div>
                <strong><?= htmlspecialchars($p['title']) ?></strong>
                <div class="muted"><?= htmlspecialchars($p['desc']) ?></div>
              </div>
            <?php endforeach; ?>
          </div>
          <div style="margin-top:12px">
            <a href="#services">See how we fix this →</a>
          </div>
        </aside>
      </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="container">
      <h2>Services</h2>
      <p class="muted">Clear deliverables, measurable savings, and training for lasting impact.</p>
      <div class="list list-4">
        <?php foreach($services as $s): ?>
          <article class="card service" aria-labelledby="svc-<?= md5($s['title']) ?>">
            <h3 id="svc-<?= md5($s['title']) ?>" class="title"><?= htmlspecialchars($s['title']) ?></h3>
            <p><?= htmlspecialchars($s['desc']) ?></p>
            <a href="<?= htmlspecialchars($s['href']) ?>" class="pill"><?= htmlspecialchars($s['cta']) ?></a>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- RESULTS / CASE STUDIES -->
    <section id="cases" class="container">
      <h2>Results</h2>
      <p class="muted">Real projects. Real savings. Replace this text with full case studies when available.</p>
      <div class="list list-3">
        <?php foreach($mini_case_studies as $c): ?>
          <article class="card">
            <h3><?= htmlspecialchars($c['title']) ?></h3>
            <p class="muted"><?= htmlspecialchars($c['context']) ?></p>
            <p><?= htmlspecialchars($c['result']) ?></p>
            <a href="#contact">Want similar results? Let’s talk →</a>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- PROCESS -->
    <section id="process" class="container">
      <h2>How it works</h2>
      <div class="card process">
        <p class="step"><strong>Discovery & Cost Audit.</strong> Inventory systems, licenses, vendors, devices, printing, and infra. Identify quick wins & long-term wins.</p>
        <p class="step"><strong>Optimize & Plan.</strong> Consolidate tools, right-size licenses, choose cloud strategy, design digital workflows.</p>
        <p class="step"><strong>Implement & Train.</strong> Roll out changes with minimal disruption; train staff and admin to adopt new processes.</p>
        <p class="step"><strong>Measure & Support.</strong> Track savings, uptime, and usage; quarterly reviews to lock in gains and find more.</p>
      </div>
    </section>

    <!-- LEAD MAGNET -->
    <section id="lead-magnet" class="container">
      <div class="card">
        <h2><?= htmlspecialchars($site['lead_magnet_title']) ?></h2>
        <p class="muted"><?= htmlspecialchars($site['lead_magnet_desc']) ?></p>
        <form class="form" method="post" action="/subscribe-handler.php" aria-label="Lead magnet signup">
          <label>
            <span class="muted">Work Email</span>
            <input type="email" name="email" placeholder="principal@school.edu" required>
          </label>
          <label>
            <span class="muted">School Name</span>
            <input type="text" name="school" placeholder="Your School" required>
          </label>
          <button class="btn" type="submit">Email Me the Checklist</button>
          <small class="muted">We’ll only email you the checklist and occasional insights. Unsubscribe anytime.</small>
        </form>
      </div>
    </section>

    <!-- RESOURCES -->
    <section id="resources" class="container">
      <h2>Resources</h2>
      <div class="list list-3">
        <article class="card">
          <h3>10 Free Tech Tools Every School Should Use</h3>
          <p class="muted">Cut software spend without losing capability.</p>
          <a href="#">Read the guide →</a>
        </article>
        <article class="card">
          <h3>Cloud vs On-Prem for Schools: Cost Reality</h3>
          <p class="muted">What actually saves money over 3–5 years.</p>
          <a href="#">See the breakdown →</a>
        </article>
        <article class="card">
          <h3>From Paper to Digital in 30 Days</h3>
          <p class="muted">A practical plan to slash printing & admin time.</p>
          <a href="#">Get the plan →</a>
        </article>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="container">
      <div class="card">
        <h2>Book a Free Consultation</h2>
        <p class="muted">Tell us about your school and current challenges. We’ll outline where you can save in the next 90 days.</p>
        <form class="form" method="post" action="/contact-handler.php" aria-label="Book a consultation">
          <label>
            <span class="muted">Your Name</span>
            <input type="text" name="name" placeholder="Full name" required>
          </label>
          <label>
            <span class="muted">Work Email</span>
            <input type="email" name="email" placeholder="you@school.edu" required>
          </label>
          <label>
            <span class="muted">Message</span>
            <textarea name="message" rows="5" placeholder="Briefly describe your goals or issues…" required></textarea>
          </label>
          <button class="btn" type="submit">Request Call</button>
          <div class="inline-badges" style="margin-top:8px">
            <span class="badge">Response in 1–2 business days</span>
            <span class="badge">Privacy-first • No spam</span>
          </div>
        </form>
      </div>
    </section>
  </main>

  <footer>
    <div class="container grid">
      <div>
        <strong><?= htmlspecialchars($site['name']) ?></strong><br>
        <span class="muted"><?= htmlspecialchars($site['tagline']) ?></span>
      </div>
      <div class="muted">
        <div>Email: <a href="mailto:<?= htmlspecialchars($site['email_contact']) ?>"><?= htmlspecialchars($site['email_contact']) ?></a></div>
        <div>Phone: <a href="tel:<?= htmlspecialchars($site['phone_contact']) ?>"><?= htmlspecialchars($site['phone_contact']) ?></a></div>
        <div>Location: <?= htmlspecialchars($site['location']) ?></div>
      </div>
      <div class="muted">
        <a href="#services">Services</a> •
        <a href="#cases">Results</a> •
        <a href="#resources">Resources</a> •
        <a href="#contact">Contact</a>
        <div style="margin-top:10px">© <?= date('Y') ?> <?= htmlspecialchars($site['name']) ?>. All rights reserved.</div>
      </div>
    </div>
  </footer>
</body>
</html>
