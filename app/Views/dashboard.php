<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f7f4">
    <title>SMEDC Tarlac | MSME Dashboard</title>
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <script src="assets/js/dashboard.js" defer></script>
</head>
<body>
<svg class="icon-library" xmlns="http://www.w3.org/2000/svg">
    <symbol id="i-grid" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></symbol>
    <symbol id="i-building" viewBox="0 0 24 24"><path d="M4 21V7l8-4 8 4v14M2 21h20M9 21v-4h6v4M8 9h.01M12 9h.01M16 9h.01M8 13h.01M12 13h.01M16 13h.01"/></symbol>
    <symbol id="i-spark" viewBox="0 0 24 24"><path d="m12 3 1.8 5.7L19.5 10l-5.7 1.8L12 17.5l-1.8-5.7L4.5 10l5.7-1.3L12 3ZM19 15l.8 2.2L22 18l-2.2.8L19 21l-.8-2.2L16 18l2.2-.8L19 15Z"/></symbol>
    <symbol id="i-layers" viewBox="0 0 24 24"><path d="m12 3 9 5-9 5-9-5 9-5ZM3 12l9 5 9-5M3 16l9 5 9-5"/></symbol>
    <symbol id="i-arrow-right" viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></symbol>
    <symbol id="i-arrow-up" viewBox="0 0 24 24"><path d="m7 17 10-10M8 7h9v9"/></symbol>
    <symbol id="i-chart" viewBox="0 0 24 24"><path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/></symbol>
    <symbol id="i-pin" viewBox="0 0 24 24"><path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></symbol>
    <symbol id="i-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/></symbol>
    <symbol id="i-users" viewBox="0 0 24 24"><circle cx="9" cy="8" r="3"/><path d="M3 20v-2a6 6 0 0 1 12 0v2M16 5a3 3 0 0 1 0 6M18 14a5 5 0 0 1 3 4.6V20"/></symbol>
    <symbol id="i-check" viewBox="0 0 24 24"><path d="m5 12 4 4L19 6"/></symbol>
    <symbol id="i-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
    <symbol id="i-leaf" viewBox="0 0 24 24"><path d="M20 4C10 4 5 8 5 15a5 5 0 0 0 5 5c7 0 10-7 10-16ZM4 21c2-5 5-8 10-11"/></symbol>
    <symbol id="i-menu" viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h16"/></symbol>
    <symbol id="i-close" viewBox="0 0 24 24"><path d="m6 6 12 12M18 6 6 18"/></symbol>
    <symbol id="i-filter" viewBox="0 0 24 24"><path d="M4 7h16M7 12h10M10 17h4"/></symbol>
</svg>

<div class="app-shell">
    <aside class="sidebar" id="sidebar">
        <a class="brand" href="#overview" aria-label="SMEDC Tarlac dashboard home">
            <span class="brand-mark"><span></span><span></span><span></span><span></span></span>
            <span class="brand-copy"><strong>SMEDC<span>.</span></strong><small>TARLAC PROVINCE</small></span>
        </a>

        <div class="workspace-label">WORKSPACE</div>
        <nav class="navigation" aria-label="Main navigation">
            <a class="nav-link active" href="#overview" aria-current="page"><svg><use href="#i-grid"/></svg> Overview <span class="active-dot"></span></a>
            <a class="nav-link" href="#enterprises"><svg><use href="#i-building"/></svg> MSME registry</a>
            <a class="nav-link" href="#recommendations"><svg><use href="#i-spark"/></svg> Service matching</a>
            <a class="nav-link" href="#activity"><svg><use href="#i-layers"/></svg> Interventions</a>
            <a class="nav-link" href="#insights"><svg><use href="#i-chart"/></svg> Reports &amp; insights</a>
        </nav>

        <div class="sidebar-bottom">
            <div class="sidebar-note">
                <div class="note-icon"><svg><use href="#i-spark"/></svg></div>
                <strong>Better together.</strong>
                <p>Connecting enterprises to opportunities across Tarlac.</p>
            </div>
            <div class="sidebar-footer"><span class="online-dot"></span> MSME DEVELOPMENT COUNCIL</div>
        </div>
    </aside>

    <div class="main-wrap">
        <header class="topbar">
            <div class="topbar-left">
                <button class="menu-button" type="button" aria-label="Open navigation" aria-controls="sidebar" aria-expanded="false"><svg><use href="#i-menu"/></svg></button>
                <span class="breadcrumb-muted">Workspace</span><span class="breadcrumb-slash">/</span><strong>Overview</strong>
            </div>
            <div class="topbar-right">
                <span class="preview-pill"><span></span> Preview mode</span>
                <span class="top-divider"></span>
                <span class="avatar">SC</span>
                <span class="profile-copy"><strong>SMEDC Council</strong><small>Workspace overview</small></span>
            </div>
        </header>

        <main class="content" id="overview">
            <div class="heading-row">
                <div>
                    <div class="eyebrow"><span></span> YOUR MSME DEVELOPMENT HUB</div>
                    <h1>Hello, Tarlac <span class="heading-spark">✳</span></h1>
                    <p class="page-subtitle">A clearer picture of progress, all in one place.</p>
                </div>
                <div class="heading-date"><svg><use href="#i-clock"/></svg> Your workspace overview</div>
            </div>

            <div class="demo-banner"><strong>Dashboard preview</strong><span>Figures and records below are illustrative sample data, not live registry information.</span></div>

            <section class="hero" aria-labelledby="hero-title">
                <div class="hero-copy">
                    <div class="hero-kicker"><span class="hero-kicker-dot"></span> GROWING TARLAC TOGETHER</div>
                    <h2 id="hero-title">Small businesses.<br><em>Big possibilities.</em></h2>
                    <p>Every enterprise has a story. Connect them with the right support to help them thrive.</p>
                    <a href="#recommendations" class="hero-link">Explore service matching <span><svg><use href="#i-arrow-right"/></svg></span></a>
                </div>
                <div class="hero-art" aria-hidden="true">
                    <div class="orbit orbit-one"></div><div class="orbit orbit-two"></div>
                    <span class="art-spark art-spark-one">✳</span><span class="art-spark art-spark-two">✦</span>
                    <div class="art-card art-card-back"><span class="art-icon"><svg><use href="#i-building"/></svg></span><span class="art-lines"><i></i><i></i></span></div>
                    <div class="art-card art-card-front">
                        <div class="art-card-head"><span class="art-icon green"><svg><use href="#i-spark"/></svg></span><span class="art-lines"><i></i><i></i></span><span class="art-check"><svg><use href="#i-check"/></svg></span></div>
                        <div class="art-card-bottom"><span>THE RIGHT SUPPORT</span><strong>More ways to grow <span>↗</span></strong></div>
                    </div>
                    <div class="art-floating"><svg><use href="#i-leaf"/></svg></div>
                </div>
            </section>

            <section class="metrics" aria-label="Sample dashboard indicators">
                <article class="metric-card"><div class="metric-top"><span class="metric-icon mint"><svg><use href="#i-building"/></svg></span><span class="metric-tag">REGISTRY</span></div><strong>2,486</strong><div class="metric-label">Registered MSMEs</div><p><span class="metric-up">↗ 12.4%</span> <span>from last quarter</span></p></article>
                <article class="metric-card"><div class="metric-top"><span class="metric-icon lavender"><svg><use href="#i-users"/></svg></span><span class="metric-tag">REACH</span></div><strong>1,842</strong><div class="metric-label">Enterprises assisted</div><p><span class="metric-up">↗ 8.2%</span> <span>from last quarter</span></p></article>
                <article class="metric-card"><div class="metric-top"><span class="metric-icon peach"><svg><use href="#i-layers"/></svg></span><span class="metric-tag">SUPPORT</span></div><strong>3,164</strong><div class="metric-label">Services delivered</div><p><span class="metric-up">↗ 16.8%</span> <span>from last quarter</span></p></article>
                <article class="metric-card"><div class="metric-top"><span class="metric-icon yellow"><svg><use href="#i-pin"/></svg></span><span class="metric-tag">COVERAGE</span></div><strong>18</strong><div class="metric-label">Municipalities reached</div><p><span>Across Tarlac province</span></p></article>
            </section>

            <div class="dashboard-grid">
                <div class="primary-column">
                    <section class="panel activity-panel" id="insights">
                        <div class="section-header"><div><div class="section-overline">THE BIG PICTURE</div><h2>Enterprise growth</h2><p>A look at MSMEs registered and supported over time.</p></div><span class="subtle-select">Jan – Jun sample</span></div>
                        <div class="chart-summary"><div><strong>2,486</strong><span>Total registered MSMEs</span></div><span class="growth-badge">↗ 12.4% this quarter</span></div>
                        <div class="chart" role="img" aria-label="Illustrative chart showing registered enterprises and enterprises assisted increasing from January through June">
                            <div class="chart-y"><span>2.5k</span><span>1.9k</span><span>1.25k</span><span>0.6k</span><span>0</span></div>
                            <div class="chart-plot">
                                <div class="chart-grid"><span></span><span></span><span></span><span></span><span></span></div>
                                <div class="chart-bars">
                                    <div class="bar-group"><div class="bars"><i style="height:55%"></i><i style="height:38%"></i></div><span>Jan</span></div>
                                    <div class="bar-group"><div class="bars"><i style="height:62%"></i><i style="height:45%"></i></div><span>Feb</span></div>
                                    <div class="bar-group"><div class="bars"><i style="height:69%"></i><i style="height:51%"></i></div><span>Mar</span></div>
                                    <div class="bar-group"><div class="bars"><i style="height:76%"></i><i style="height:57%"></i></div><span>Apr</span></div>
                                    <div class="bar-group"><div class="bars"><i style="height:85%"></i><i style="height:65%"></i></div><span>May</span></div>
                                    <div class="bar-group"><div class="bars"><i style="height:97%"></i><i style="height:72%"></i></div><span>Jun</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="chart-legend"><span><i></i> Registered MSMEs</span><span><i></i> Enterprises assisted</span></div>
                    </section>

                    <section class="panel table-panel" id="enterprises">
                        <div class="section-header table-heading"><div><div class="section-overline">MEET THE ENTERPRISES</div><h2>Recently registered</h2><p>A snapshot of businesses in the registry.</p></div><label class="table-search"><svg><use href="#i-search"/></svg><span class="sr-only">Search sample enterprises</span><input id="enterprise-search" type="search" placeholder="Search enterprises"></label></div>
                        <div class="table-scroll">
                            <table>
                                <thead><tr><th>ENTERPRISE</th><th>INDUSTRY</th><th>LOCATION</th><th>STATUS</th></tr></thead>
                                <tbody id="enterprise-list">
                                    <tr><td><span class="business-cell"><span class="business-icon business-green">HL</span><span><strong>Harvest &amp; Loom</strong><small>MSME-2024-0248</small></span></span></td><td>Food processing</td><td>Tarlac City</td><td><span class="status verified"><i></i> Verified</span></td></tr>
                                    <tr><td><span class="business-cell"><span class="business-icon business-purple">AC</span><span><strong>Amara Crafts</strong><small>MSME-2024-0247</small></span></span></td><td>Handicrafts</td><td>Capas</td><td><span class="status verified"><i></i> Verified</span></td></tr>
                                    <tr><td><span class="business-cell"><span class="business-icon business-orange">GF</span><span><strong>Greenfields Farm</strong><small>MSME-2024-0246</small></span></span></td><td>Agribusiness</td><td>Concepcion</td><td><span class="status pending"><i></i> In review</span></td></tr>
                                </tbody>
                            </table>
                            <p id="no-results" class="no-results" hidden>No sample enterprises match your search.</p>
                        </div>
                        <div class="table-foot"><div id="enterprise-count">Showing 3 sample enterprises</div><span>Registry preview <svg><use href="#i-arrow-right"/></svg></span></div>
                    </section>
                </div>

                <div class="secondary-column">
                    <section class="panel needs-panel" id="recommendations">
                        <div class="section-header"><div><div class="section-overline">OPPORTUNITIES TO HELP</div><h2>Top MSME needs</h2><p>Where support can make a difference.</p></div><span class="round-icon"><svg><use href="#i-spark"/></svg></span></div>
                        <div class="needs-list">
                            <div class="need"><div><span class="need-number">01</span><strong>Access to financing</strong><b>32%</b></div><div class="progress"><span style="width: 32%"></span></div></div>
                            <div class="need"><div><span class="need-number">02</span><strong>Market expansion</strong><b>25%</b></div><div class="progress"><span style="width: 25%"></span></div></div>
                            <div class="need"><div><span class="need-number">03</span><strong>Product development</strong><b>21%</b></div><div class="progress"><span style="width: 21%"></span></div></div>
                            <div class="need"><div><span class="need-number">04</span><strong>Skills &amp; training</strong><b>15%</b></div><div class="progress"><span style="width: 15%"></span></div></div>
                        </div>
                        <div class="insight-note"><span>✦</span><p><strong>A little insight</strong>Financing is the most common need in this sample.</p></div>
                    </section>

                    <section class="panel match-panel">
                        <div class="match-heading"><span class="match-icon"><svg><use href="#i-spark"/></svg></span><span class="match-label">SERVICE MATCHING</span></div>
                        <h2>The right support,<br>at the right time.</h2>
                        <p>Match enterprise needs with programs from partner agencies.</p>
                        <div class="match-example"><span>EXAMPLE MATCH</span><strong>Product development <svg><use href="#i-arrow-right"/></svg> DOST</strong><small>Technology and product improvement assistance</small></div>
                    </section>

                    <section class="panel activity-list-panel" id="activity">
                        <div class="section-header"><div><div class="section-overline">WORKING TOGETHER</div><h2>Recent activity</h2></div><span class="activity-indicator">SAMPLE</span></div>
                        <div class="timeline">
                            <div class="timeline-item"><span class="timeline-icon mint"><svg><use href="#i-check"/></svg></span><div><strong>Training completed</strong><p>Digital skills workshop · DTI</p><small>2 hours ago</small></div></div>
                            <div class="timeline-item"><span class="timeline-icon lavender"><svg><use href="#i-arrow-up"/></svg></span><div><strong>Referral endorsed</strong><p>Product development · DOST</p><small>Yesterday</small></div></div>
                            <div class="timeline-item"><span class="timeline-icon peach"><svg><use href="#i-building"/></svg></span><div><strong>New enterprise registered</strong><p>Harvest &amp; Loom · Tarlac City</p><small>2 days ago</small></div></div>
                        </div>
                    </section>
                </div>
            </div>
            <footer class="page-footer"><span>Made for a more enterprising Tarlac.</span><span>SMEDC <b>·</b> MSME DEVELOPMENT HUB</span></footer>
        </main>
    </div>
</div>
</body>
</html>
