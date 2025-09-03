@extends('layouts.app')

@section('title', 'Helping Schools Cut Costs with Smarter Technology')
@section('meta_description', 'We help schools reduce IT and operational costs by 20–30% without sacrificing quality.')

@section('content')
  <!-- HERO -->
  <section class="container grid grid-2" style="padding:64px 0;">
    <div class="card">
      <span class="pill">Education • Cost Optimization</span>
      <h1>Helping Schools Cut Costs with Smarter Technology</h1>
      <p class="lead">We help schools reduce IT and operational costs by <strong>20–30%</strong> without sacrificing quality — through audits, cloud migration, digital workflows, and smart vendor strategies.</p>
      <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:8px">
        <a class="btn" href="{{ route('contact') }}">Book a Free Consultation</a>
        <a class="btn secondary" href="{{ route('leadmagnet') }}">Get the Free Checklist</a>
      </div>

      <!-- Results / Impact (mini case studies with numbers) -->
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

    <!-- Key Problems We Solve -->
    <aside class="card" role="complementary" aria-label="Key problems we solve">
      <h2>Where schools overspend</h2>
      <div class="list list-4">
        <div>
          <div class="pill" aria-hidden="true">💸</div>
          <strong>Rising IT licensing costs</strong>
          <div class="muted">Audit tools, consolidate vendors, choose budget-friendly, compliant alternatives.</div>
        </div>
        <div>
          <div class="pill" aria-hidden="true">🖥️</div>
          <strong>Expensive on-prem servers</strong>
          <div class="muted">Move to cloud (Google/Microsoft), right-size storage, automate backups.</div>
        </div>
        <div>
          <div class="pill" aria-hidden="true">🖨️</div>
          <strong>Printing/paper costs</strong>
          <div class="muted">Digitize forms & approvals; adopt e-signatures and retention policies.</div>
        </div>
        <div>
          <div class="pill" aria-hidden="true">🧾</div>
          <strong>Admin overload</strong>
          <div class="muted">Automate attendance, fees, reporting with low-code workflows & APIs.</div>
        </div>
      </div>
    </aside>
  </section>

  <!-- How It Works (Process) -->
  <section class="container">
    <h2>How it works</h2>
    <div class="card process">
      <p class="step"><strong>Discovery & Cost Audit.</strong> Inventory systems, licenses, vendors, devices, printing, and infra. Identify quick wins & long-term wins.</p>
      <p class="step"><strong>Optimize & Plan.</strong> Consolidate tools, right-size licenses, choose cloud strategy, design digital workflows.</p>
      <p class="step"><strong>Implement & Train.</strong> Roll out changes with minimal disruption; train staff and admin to adopt new processes.</p>
      <p class="step"><strong>Measure & Support.</strong> Track savings, uptime, and usage; quarterly reviews to lock in gains and find more.</p>
    </div>
  </section>

  <!-- Credibility -->
  <section class="container">
    <h2>Why work with us</h2>
    <div class="list list-3">
      <div class="card">
        <strong>Real school experience</strong>
        <p class="muted">We’ve run and optimized school IT environments—so advice is practical, not theoretical.</p>
      </div>
      <div class="card">
        <strong>Vendor-neutral</strong>
        <p class="muted">We recommend what saves you money and fits your context, not what pays us the most.</p>
      </div>
      <div class="card">
        <strong>Results you can measure</strong>
        <p class="muted">Case-study-backed savings in printing, licensing, infra, and admin time.</p>
      </div>
    </div>
  </section>

  <!-- Final CTA -->
  <section class="container">
    <div class="card" style="display:flex;gap:16px;align-items:center;justify-content:space-between;flex-wrap:wrap">
      <div>
        <h2>Ready to see how much you could save?</h2>
        <p class="muted">Book a free 15-minute consultation or download the checklist to start now.</p>
      </div>
      <div style="display:flex;gap:10px;flex-wrap:wrap">
        <a class="btn" href="{{ route('contact') }}">Book a Call</a>
        <a class="btn secondary" href="{{ route('leadmagnet') }}">Download Checklist</a>
      </div>
    </div>
  </section>
@endsection
