<?php
    $arrow = '<div class="arrow-wrapper"><div class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="17.228" height="11.869" viewBox="0 0 17.228 11.869"><g id="Arrow" transform="translate(-1554 -390.565)"><line id="Line_3" data-name="Line 3" x2="16" transform="translate(1554.5 396.5)" fill="none" stroke="#304354" stroke-linecap="round" stroke-width="1"/><path id="Path_255" data-name="Path 255" d="M3370.5,401l5.228-5.228-5.228-5.228" transform="translate(-1805 0.728)" fill="none" stroke="#304354" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg></div></div>';
    $template = get_bloginfo('template_url');
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/dist/calculator/calculator.js?v=<?php echo time(); ?>" id="peritus-caolcualtor-js"></script>

<div class="main-layout calculator-wrapper" id="calculator-layout">
                
    <!-- Content Wrapper -->
    <div class="content-wrapper">
    
    <!-- Calculator Inputs Card -->
    <section class="card inputs-card">
        <div class="tab-navigation course-pack-widgets">
            <button id="both-tab" class="unlimited-tab tab-button active widget pack-widget unlimited button" >
                <div class="overlay" data-tab="both"></div>
                <div class="link-arrow-wrapper"><?php echo $arrow; ?></div>
                <div class="image-wrapper">
                    <img src="<?php echo $template; ?>/images/unlimited-widget-icon.svg" />
                </div>
                <div class="widget-inner">
                    <div class="title">Unlimited</div>
                    <div class="subtitle">Learning pack</div>
                </div>
            </button>

            <button class="management-tab tab-button  widget pack-widget management button">
                <div class="overlay" data-tab="learn-to-lead"></div>
                <div class="link-arrow-wrapper"><?php echo $arrow; ?></div>
                <div class="image-wrapper">
                    <img src="<?php echo $template; ?>/images/management-widget-icon.svg" />
                </div>
                <div class="widget-inner">
                    <div class="title">Management</div>
                    <div class="subtitle">Learning pack</div>
                </div>
            </button>

            <button id="microlearning-tab" class="micro-learning-tab tab-button widget pack-widget micro button">
                <div class="overlay" data-tab="microlearning"></div>
                <div class="link-arrow-wrapper"><?php echo $arrow; ?></div>
                <div class="image-wrapper">
                    <img src="<?php echo $template; ?>/images/micro-widget-icon.svg" />
                </div>
                <div class="widget-inner">
                    <div class="title">Micro</div>
                    <div class="subtitle">Learning pack</div>
                </div>
            </button>
        </div>


        <div class="inputs-container">
            <div id="microlearning-inputs" class="microlearning-section" style="display:none">
                <div class="pack-content-area micro">
                    <div class="left-side">
                        <div class="titles">
                            <div class="top-title">What is</div>
                            <div class="title">The Microlearning Learning pack?</div>
                        </div>
                        <div class="pack-contents">
                            <div>
                                <div class="contents-title">Contents:</div>
                                <ul>
                                    <li>Compliance</li>
                                    <li>Health & safety</li>
                                    <li>People & relationships</li>
                                    <li>Project management</li>
                                </ul>
                            </div>
                            <div>
                                <div class="contents-title">&nbsp;</div>
                                <ul>
                                    <li>Sales</li>
                                    <li>IT skills</li>
                                    <li>Working from home</li>
                                </ul>
                            </div>
                        </div>
                        <div class="includes-dropdown">
                            <div class="includes-title">130+ impactful micro-courses</div>
                            <div class="list">
                                <div class="secondary-link-wrapper">
                                    <div class="secondary-link button">
                                        <span class="text">Topics include</span>
                                        <?php echo $arrow; ?>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <ul>
                                        <li>Unlimited access for your entire workforce</li>
                                        <li>Regular updates by subject matter experts</li>
                                        <li>Customisable workbooks</li>
                                        <li>Module descriptions, tests & thumbnails</li>
                                        <li>SCORM, MP4 files</li>
                                        <li>Seamless integration with your existing platform</li>
                                        <li>Optional: Translations (175 languages)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-side sliders">
                        <div class="titles">
                            <div class="top-title">What are you currently paying for</div>
                            <div class="title">Online learning content?</div>
                        </div>
                        <div class="custom-cost-section">
                            <p class="cost-explanation">We will use average market rates if no inputs are received.</p>
                            <div class="cost-toggle-section">
                                <div class="toggle-options">
                                    <label class="toggle-option">
                                        <input type="radio" name="ml-cost-type" value="market" id="cost-type-market-ml" checked>
                                        <span class="toggle-label">Market values</span>
                                    </label>
                                    <label class="toggle-option">
                                        <input type="radio" name="ml-cost-type" value="total" id="cost-type-total-ml">
                                        <span class="toggle-label">Total annual cost</span>
                                    </label>
                                    <label class="toggle-option">
                                        <input type="radio" name="ml-cost-type" value="per-user" id="cost-type-per-user-ml">
                                        <span class="toggle-label">Cost per employee</span>
                                    </label>
                                </div>
                                <div class="custom-cost-inputs">
                                    <div class="input-group" id="total-cost-group-ml" style="display: none;">
                                        <label for="total-cost-ml">Total annual cost (£)</label>
                                        <input type="number" id="total-cost-ml" placeholder="e.g., 50000" min="0">
                                    </div>
                                    <div class="input-group" id="per-user-cost-group-ml" style="display: none;">
                                        <label for="cost-per-user-ml">Cost per employee (£)</label>
                                        <input type="number" id="cost-per-user-ml" placeholder="e.g., 25" min="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       <div class="slider-group">
                            <div class="slider-label-group">
                                <label for="employee-input-ml" class="slider-label">Number of employees</label>
                            </div>
                            <div class="slider-control-group">
                                <div class="slider-track-wrapper">
                                    <input type="range" id="employee-slider-ml" min="100" max="4000" value="1500">
                                </div>
                                <div class="slider-value-box">
                                    <input type="number" class="slider-value-input" id="employee-input-ml" value="1500" min="100" max="4000">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div id="learn-to-lead-inputs" style="display: none;">
                <div class="pack-content-area management">
                    <div class="left-side">
                        <div class="titles">
                            <div class="top-title">What is</div>
                            <div class="title">The Management Learning pack?</div>
                        </div>
                        <div class="pack-contents">
                            <div>
                                <div class="contents-title">In line with ILM Standards:</div>
                                <ul>
                                    <li>Aspiring: ILM L2</li>
                                    <li>First line: ILM L3</li>
                                    <li>Mid-senior level: ILM L5</li>
                                </ul>
                            </div>
                            <div>
                                <div class="contents-title">Modules:</div>
                                <ul>
                                    <li>Aspiring: 16</li>
                                    <li>First line: 19</li>
                                    <li>Mid-senior level: 16</li>
                                </ul>
                            </div>
                        </div>
                        <div class="includes-dropdown">
                            <div class="includes-title">50+ in-depth and interactive modules</div>
                            <div class="list">
                                <div class="secondary-link-wrapper">
                                    <div class="secondary-link button">
                                        <span class="text">Topics include</span>
                                        <?php echo $arrow; ?>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <ul>
                                        <li>Unlimited access for your entire workforce</li>
                                        <li>Regular updates by subject matter experts</li>
                                        <li>Customisable workbooks</li>
                                        <li>Module descriptions & thumbnails</li>
                                        <li>SCORM files</li>
                                        <li>Seamless integration with your existing platform</li>
                                        <li>Optional: Translations (175 languages)</li>
                                        <li>Optional: Accreditation (Aspiring ILM L2, FLM ILM L3, MSM ILM L5)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-side sliders">
                        <div class="titles">
                            <div class="top-title">What are you currently paying for</div>
                            <div class="title">Management online learning content?</div>
                        </div>
                        <div class="custom-cost-section">
                            <p class="cost-explanation">We will use average market rates if no inputs are received.</p>
                            <div class="cost-toggle-section">
                                <div class="toggle-options">
                                    <label class="toggle-option">
                                        <input type="radio" name="cost-type-l2l" value="market" id="cost-type-market-l2l" checked>
                                        <span class="toggle-label">Market values</span>
                                    </label>
                                    <label class="toggle-option">
                                        <input type="radio" name="cost-type-l2l" value="total" id="cost-type-total-l2l">
                                        <span class="toggle-label">Total annual cost</span>
                                    </label>
                                    <label class="toggle-option">
                                        <input type="radio" name="cost-type-l2l" value="per-user" id="cost-type-per-user-l2l">
                                        <span class="toggle-label">Cost per manager</span>
                                    </label>
                                </div>
                                <div class="custom-cost-inputs">
                                    <div class="input-group" id="total-cost-group-l2l" style="display: none;">
                                        <label for="total-cost-l2l">Total annual cost (£)</label>
                                        <input type="number" id="total-cost-l2l" placeholder="e.g., 25000" min="0">
                                    </div>
                                    <div class="input-group" id="per-user-cost-group-l2l" style="display: none;">
                                        <label for="cost-per-user-l2l">Cost per manager (£)</label>
                                        <input type="number" id="cost-per-user-l2l" placeholder="e.g., 850" min="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="slider-group">
                            <div class="slider-label-group">
                                <label for="manager-input-l2l" class="slider-label">Number of managers for online learning content</label>
                            </div>
                            <div class="slider-control-group">
                                <div class="slider-track-wrapper">
                                    <input type="range" id="manager-slider-l2l" min="10" max="2000" value="100">
                                </div>
                                <div class="slider-value-box">
                                    <input type="number" class="slider-value-input" id="manager-input-l2l" value="100" min="10" max="2000">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <!-- Both Inputs Panel -->
            <div id="both-inputs">
                <div class="pack-content-area unlimited">
                    <div class="left-side">
                        <div class="titles">
                            <div class="top-title">What is</div>
                            <div class="title">The Unlimited Learning pack?</div>
                        </div>
                        <div class="pack-contents">
                            <div class="contents-title">Contents:</div>
                            <ul>
                                <li>Management Learning Pack</li>
                                <li>Microlearning Pack</li>
                            </ul>
                        </div>
                        <div class="includes-dropdown">
                            <div class="includes-title">180+ in-depth and interactive modules</div>
                            <div class="list">
                                <div class="secondary-link-wrapper">
                                    <div class="secondary-link button">
                                        <span class="text">Topics include</span>
                                        <?php echo $arrow; ?>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <ul>
                                        <li>Unlimited access for your entire workforce</li>
                                        <li>Modules written in line with ILM standards</li>
                                        <li>Regular updates by subject matter experts</li>
                                        <li>Customisable workbooks</li>
                                        <li>Module descriptions, tests & thumbnails</li>
                                        <li>SCORM, MP4 files</li>
                                        <li>Seamless integration with your existing platform</li>
                                        <li>Optional: Translations (175 languages)</li>
                                        <li>Optional: Accreditation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-side sliders">
                        <div class="slider-group">
                            <div class="slider-label-group">
                                <label for="employee-input-both" class="slider-label">Number of employees</label>
                            </div>
                            <div class="slider-control-group">
                                <div class="slider-track-wrapper">
                                    <input type="range" id="employee-slider-both" min="100" max="4000" value="1500">
                                </div>
                                <div class="slider-value-box">
                                    <input type="number" class="slider-value-input" id="employee-input-both" value="1500" min="100" max="4000">
                                </div>
                            </div>
                        </div>
                        <div class="slider-group">
                            <div class="slider-label-group">
                                <label for="manager-slider-both" class="slider-label">Number of managers for online learning content</label>
                            </div>
                            <div class="slider-control-group">
                                <div class="slider-track-wrapper">
                                    <input type="range" class="slider-track" id="manager-slider-both" min="10" max="2000" value="100" step="1">
                                </div>
                                <div class="slider-value-box">
                                    <input type="number" class="slider-value-input" id="manager-input-both" value="100" min="10" max="2000">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>









    <!-- Estimated Savings Card -->
    <section class="card savings-card">
        <div class="savings-header">
            <div class="card-title">Your estimated savings</div>
        </div>
        <div class="savings-body">
            <div class="savings-timeframes">
                <div class="savings-timeframe-column">
                    <p class="savings-description">1 Year savings</p>
                    <p class="savings-amount" id="savings-amount-1">£0</p>
                    <p class="savings-percent" id="savings-percent-1">0% savings</p>
                </div>
                <div class="savings-timeframe-column">
                    <p class="savings-description">5 Year savings</p>
                    <p class="savings-amount" id="savings-amount-5">£0</p>
                    <p class="savings-percent" id="savings-percent-5">0% savings</p>
                </div>
                <div class="savings-timeframe-column">
                    <p class="savings-description">10 Year savings</p>
                    <p class="savings-amount" id="savings-amount-10">£0</p>
                    <p class="savings-percent" id="savings-percent-10">0% savings</p>
                </div>
            </div>
            <p class="savings-context" id="savings-context">Based on 1500 employees</p>
        </div>
    </section>

    <!-- Pricing Comparison Section -->
    <div class="comparison-section">
        <!-- Peritus Pricing Card -->
        <section class="card pricing-card peritus-pricing-card">
            <div class="pricing-card-title peritus-title">Peritus pricing</div>
            <div class="pricing-details">
                <div class="pricing-tiers" id="peritus-pricing-tiers">
                    <!-- This will be dynamically updated based on the active tab -->
                </div>
                <div class="current-rate-display">
                    Peritus Cost: <span id="peritus-cost-rate">£0 per user</span>
                </div>
            </div>
        </section>
        <!-- Market Pricing Card -->
        <section class="card pricing-card market-pricing-card">
            <div class="pricing-card-title market-title">Market rate</div>
            <div class="pricing-details">
                <div class="pricing-tiers" id="market-pricing-tiers">
                    <!-- This will be dynamically updated based on the active tab -->
                </div>
                <div class="current-rate-display">
                    Current Rate: <span id="market-cost-rate">£0 per user</span>
                </div>
            </div>
        </section>
    </div>

    <!-- Visualization Card -->
    <section class="card visualization-card">
        <div class="visualization-header">
            <div class="card-title">10-Year savings visualization</div>
        </div>
        <div class="chart-container">
            <canvas id="savingsChart"></canvas>
        </div>
    </section>
</div>

<!-- Quote Form Section -->
<section class="card" id="quote-form-section" style="display: none;">
    <h2 class="card-title">Get your personalized quote</h2>
    <div class="form-wrapper">
        <form id="contact-form" class="contact-form">
            <div class="form-group">
                <label for="full-name">Full name *</label>
                <input type="text" id="full-name" name="fullName" required>
            </div>
            
            <div class="form-group">
                <label for="company-name">Company name *</label>
                <input type="text" id="company-name" name="companyName" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email address *</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone number *</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            
            <div class="form-group">
                <label>Products of interest *</label>
                <div class="checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" id="microlearning-checkbox" name="products" value="microlearning">
                        <span class="checkbox-text">Microlearning Library</span>
                    </label>
                    <label class="checkbox-label">
                        <input type="checkbox" id="learn-to-lead-checkbox" name="products" value="learn-to-lead">
                        <span class="checkbox-text">Learn to Lead (Management Training)</span>
                    </label>
                </div>
            </div>
            
            <div class="current-selection">
                <h3>Your current selection</h3>
                <div class="selection-details" id="selection-details">
                    <!-- This will be populated by JavaScript -->
                </div>
            </div>
            
            <button type="submit" class="submit-button" id="submit-button">
                <span class="button-text">Send My quote request</span>
                <span class="button-loading" style="display: none;">Sending...</span>
            </button>
            
            <div class="form-message" id="form-message" style="display: none;"></div>
        </form>
    </div>
</section>

</div><!-- Close main-layout -->