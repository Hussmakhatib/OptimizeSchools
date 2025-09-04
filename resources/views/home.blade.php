@extends('layouts.app')

@section('title', 'Helping Schools Cut Costs with Smarter Technology')
@section('meta_description', 'We help schools reduce IT and operational costs by 20–30% without sacrificing quality.')

@section('content')
  <!-- The scrollable slider viewport (below the fixed 125px header) -->
  <div class="slider">
    <!-- HOME -->
    <section id="home" class="section section--center">
      <div class="section-inner">
        <div class="container">
          <div class="card stack">
            <span class="pill">Education • Cost Optimization</span>
            <h1>Helping Schools Cut Costs with Smarter Technology</h1>
            <p class="lead">We help schools reduce IT and operational costs by <strong>20–30%</strong> without sacrificing quality — through audits, cloud migration, digital workflows, and smart vendor strategies.</p>
            <div class="stack" style="display:grid;grid-auto-flow:column;grid-auto-columns:max-content;gap:10px;">
              <a class="btn" href="#contact">Book a Free Consultation</a>
              <a class="btn secondary" href="#resources">Get the Free Checklist</a>
            </div>
            <div class="kpis" aria-label="Mini case studies">
              <div class="card">
                <b>Printing Costs ↓ 80%</b>
                <div class="muted">International School, 900 students</div>
                <div>Saved $12,000/yr by moving to digital forms & cloud docs.</div>
              </div>
              <div class="card">
                <b>Licensing Spend ↓ 25%</b>
                <div class="muted">Private K–12, 1,200 students</div>
                <div>Consolidated tools; switched to low-cost, high-impact alternatives.</div>
              </div>
              <div class="card">
                <b>Server Costs ↓ 40%</b>
                <div class="muted">Multi-campus network</div>
                <div>Hybrid cloud migration with right-sized storage & backup.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- SERVICES -->
    <section id="services" class="section">
      <div class="section-inner">
        <div class="container">
          <h2>Services</h2>
          <div class="grid-3">
            <div class="card"><strong>IT Cost Audit</strong><p class="muted">A 360° review to uncover 20–30% savings opportunities.</p></div>
            <div class="card"><strong>Cloud Migration & Optimization</strong><p class="muted">Google Workspace / Microsoft 365 done right.</p></div>
            <div class="card"><strong>Digital Workflow & Automation</strong><p class="muted">Replace paper processes with secure digital flows.</p></div>
          </div>
          <div class="grid-3" style="margin-top:12px">
            <div class="card"><strong>Cybersecurity & Compliance</strong><p class="muted">Reduce risk and cost with smart policies and tooling.</p></div>
            <div class="card"><strong>Training & Support</strong><p class="muted">Ensure adoption and compounding efficiency gains.</p></div>
            <div class="card"><strong>Vendor Strategy</strong><p class="muted">Consolidate licenses and negotiate better contracts.</p></div>
          </div>
        </div>
      </div>
    </section>
    <!-- RESULTS -->
    <section id="results" class="section">
      <div class="section-inner">
        <div class="container">
          <h2>Results</h2>
          <div class="grid-3">
            <div class="card">
              <strong>Printing Costs ↓ 80%</strong>
              <p class="muted">International School, 900 students</p>
              <p>Digital forms & e-signatures cut waste dramatically.</p>
            </div>
            <div class="card">
              <strong>Licensing Spend ↓ 25%</strong>
              <p class="muted">Private K–12, 1,200 students</p>
              <p>Consolidation & vendor strategy saved five figures.</p>
            </div>
            <div class="card">
              <strong>Server Costs ↓ 40%</strong>
              <p class="muted">Multi-campus network</p>
              <p>Hybrid cloud migration with right-sized storage & backup.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ABOUT -->
    <section id="about" class="section">
      <div class="section-inner">
        <div class="container">
          <h2>About</h2>
          <div class="card">
            <p class="muted">We help schools cut costs and improve efficiency with vendor-neutral, practical solutions grounded in real school IT experience.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- RESOURCES -->
    <section id="resources" class="section">
      <div class="section-inner">
        <div class="container">
          <h2>Resources</h2>
          <div class="grid-3">
            <div class="card"><strong>10 Free Tech Tools Every School Should Use</strong><p class="muted">Cut software spend without losing capability.</p></div>
            <div class="card"><strong>Cloud vs On-Prem for Schools: Cost Reality</strong><p class="muted">What actually saves money over 3–5 years.</p></div>
            <div class="card"><strong>From Paper to Digital in 30 Days</strong><p class="muted">Slash printing & admin time with a simple plan.</p></div>
          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT -->
    <section id="contact" class="section">
      <div class="section-inner">
        <div class="container">
          <h2>Book a Free Consultation</h2>
          <div class="card">
            <form class="stack" method="post" action="/contact" data-validate>
              @csrf
              <div style="display:grid;gap:12px;grid-template-columns:1fr 1fr">
                <label class="field">Name
                  <input name="name" required>
                  <div class="form-error"></div>
                </label>
                <label class="field">Work Email
                  <input type="email" name="email" required>
                  <div class="form-error"></div>
                </label>
              </div>
              <label class="field">Message
                <textarea name="message" rows="5" required></textarea>
                <div class="form-error"></div>
              </label>
              <div style="display:grid;grid-auto-flow:column;grid-auto-columns:max-content;gap:10px;">
                <button class="btn" type="submit">Request Call</button>
                <a class="btn secondary" href="#resources">Download Checklist</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div> <!-- /slider -->
@endsection
