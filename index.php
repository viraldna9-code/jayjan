<?php
/**
 * Main template file for Faithful Messenger theme
 * Builds the full homepage with all sections
 */
get_header();
?>

<!-- ==================== HERO SECTION ==================== -->
<section class="fm-hero" id="home">
    <div class="fm-container">
        <div class="fm-hero-content">
            <div class="fm-hero-label">Welcome to</div>
            <h1>
                <span class="fm-gold">Church</span> of <span class="fm-gold">Christ</span><br>
                <span class="fm-muted">K.L. Rao Nagar</span>
            </h1>
            <div class="fm-hero-evangelist-name">Dr. Katikala Samuel David Boon</div>
            <div class="fm-hero-evangelist-cred">Evangelist &bull; Bible Teacher &bull; Church Planter</div>
            <div class="fm-hero-quote">
                "Study to show yourself approved unto God, a workman that needeth not to be ashamed, rightly dividing the word of truth."
                <br><small style="color:var(--fm-gold)">— 2 Timothy 2:15</small>
            </div>
            <div class="fm-hero-buttons">
                <a href="#services" class="fm-btn fm-btn-gold fm-btn-rounded fm-btn-lg">Join a Service</a>
                <a href="#teachings" class="fm-btn fm-btn-outline fm-btn-rounded fm-btn-lg">Explore Teachings</a>
            </div>
            <div class="fm-hero-stats">
                <div>
                    <div class="fm-hero-stat-value">56+</div>
                    <div class="fm-hero-stat-label">Baptized</div>
                </div>
                <div>
                    <div class="fm-hero-stat-value">10+</div>
                    <div class="fm-hero-stat-label">Years Ministry</div>
                </div>
                <div>
                    <div class="fm-hero-stat-value">3</div>
                    <div class="fm-hero-stat-label">Bible Programs</div>
                </div>
                <div>
                    <div class="fm-hero-stat-value">7</div>
                    <div class="fm-hero-stat-label">Weekly Services</div>
                </div>
            </div>
        </div>
        <div class="fm-hero-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/evangelist-nobg.png" alt="Dr. Katikala Samuel David Boon - Evangelist" loading="eager">
        </div>
    </div>
    <div class="fm-hero-scroll">Scroll</div>
</section>

<!-- ==================== SCRIPTURE MARQUEE ==================== -->
<div class="fm-marquee">
    <div class="fm-marquee-track">
        <?php
        $verses = array(
            'For God so loved the world — John 3:16',
            'I can do all things through Christ — Philippians 4:13',
            'The Lord is my shepherd — Psalm 23:1',
            'Trust in the Lord with all your heart — Proverbs 3:5',
            'Be strong and courageous — Joshua 1:9',
            'The Lord is my light and my salvation — Psalm 27:1',
            'Come to me, all you who are weary — Matthew 11:28',
            'For I know the plans I have for you — Jeremiah 29:11',
        );
        // Duplicate for seamless loop
        $all_verses = array_merge($verses, $verses);
        foreach ($all_verses as $verse) :
        ?>
        <div class="fm-marquee-item">
            <span class="fm-star">★</span>
            <?php echo esc_html($verse); ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- ==================== ABOUT SECTION ==================== -->
<section class="fm-section fm-about" id="about">
    <div class="fm-container">
        <div class="fm-label"><span class="fm-gold-line"></span> About Us</div>
        <h2 class="fm-section-title">Our <span>Pastor</span> & <span>Church</span></h2>

        <div class="fm-about-card">
            <div class="fm-about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/evangelist-nobg.png" alt="Dr. Katikala Samuel David Boon" loading="lazy">
            </div>
            <div class="fm-about-content">
                <h3>Dr. Katikala Samuel David Boon</h3>
                <div class="fm-about-cred">M.Th — Bharat Bible College, Hyderabad &bull; Evangelist &bull; Church of Christ</div>
                <p>
                    <strong>Dr. Katikala Samuel David Boon</strong> is the dedicated evangelist of Church of Christ, K.L. Rao Nagar, Vijayawada. With over <strong>10 years of faithful ministry</strong>, he has been instrumental in leading <strong>56+ souls to baptism</strong> and establishing Bible training programs that equip believers for service.
                </p>
                <p>
                    A graduate of <strong>Bharat Bible College, Hyderabad</strong> (M.Th), Dr. Boon combines deep Biblical scholarship with practical evangelistic passion. His teaching style is clear, engaging, and rooted in Scripture — making the Word of God accessible to all.
                </p>
                <div class="fm-about-quote">
                    "His life is a testimony of God's grace — from humble beginnings to becoming a vessel for the Gospel in Andhra Pradesh."
                </div>
                <a href="#contact" class="fm-btn fm-btn-gold fm-btn-rounded">Connect with Us</a>
            </div>
        </div>

        <div class="fm-about-bottom">
            <div class="fm-about-building">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/church-building.webp" alt="Church of Christ Building" loading="lazy">
            </div>
            <div class="fm-about-church">
                <h3>Church of Christ, <span style="color:var(--fm-gold)">K.L. Rao Nagar</span></h3>
                <p>
                    Located in the heart of Vijayawada, our church is a congregation of believers dedicated to the teaching of God's Word, fellowship, and spreading the Gospel throughout Andhra Pradesh.
                </p>
                <p>
                    We believe in the Bible as the complete Word of God, baptism by immersion for salvation, and the welcoming of all people regardless of background. Our doors are open daily from 6:00 AM.
                </p>
                <blockquote>
                    "And let us not neglect meeting together, as some are in the habit of doing, but encouraging one another." — Hebrews 10:25
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- ==================== TEACHINGS SECTION ==================== -->
<section class="fm-section fm-teachings" id="teachings">
    <div class="fm-container">
        <div class="fm-label"><span class="fm-gold-line"></span> Teachings</div>
        <h2 class="fm-section-title">Core <span>Biblical</span> Teachings</h2>
        <p class="fm-section-subtitle">Foundational truths from God's Word that guide our faith and practice</p>

        <div class="fm-teachings-grid">
            <?php
            $teachings = array(
                array(
                    'verse_color' => '#c88300',
                    'verse' => 'John 14:6',
                    'title' => 'Salvation',
                    'subtitle' => 'The Way, The Truth, The Life',
                    'desc' => 'Understanding the complete work of Christ on the cross and what it means to be born again. Salvation is by grace through faith.',
                    'card_bg_1' => '#0a1628',
                    'card_bg_2' => '#0d1a2e',
                ),
                array(
                    'verse_color' => '#60a5fa',
                    'verse' => 'Hebrews 11:1',
                    'title' => 'Faith',
                    'subtitle' => 'Moving Mountains',
                    'desc' => 'Practical, Biblical teaching on how to build unshakeable faith in God\'s promises. Faith comes by hearing the Word of God.',
                    'card_bg_1' => '#0a1628',
                    'card_bg_2' => '#0d1a2e',
                ),
                array(
                    'verse_color' => '#a78bfa',
                    'verse' => 'Philippians 4:6',
                    'title' => 'Prayer',
                    'subtitle' => 'The Power of the Praying Life',
                    'desc' => 'How to develop a powerful, consistent prayer life that moves Heaven. Prayer is the believer\'s lifeline to God.',
                    'card_bg_1' => '#0a1628',
                    'card_bg_2' => '#0d1a2e',
                ),
                array(
                    'verse_color' => '#fbbf24',
                    'verse' => 'Matthew 6:33',
                    'title' => 'Kingdom of God',
                    'subtitle' => 'His Kingdom Come',
                    'desc' => 'A deep study of the reign of God in the believer\'s life and in the world. Seeking first the Kingdom of God.',
                    'card_bg_1' => '#0a1628',
                    'card_bg_2' => '#0d1a2e',
                ),
                array(
                    'verse_color' => '#34d399',
                    'verse' => 'Isaiah 53:5',
                    'title' => 'Healing',
                    'subtitle' => 'By His Wounds We Are Healed',
                    'desc' => 'Biblical foundations for divine healing — physical, emotional, and spiritual. God is Jehovah Rapha, the Lord who heals.',
                    'card_bg_1' => '#0a1628',
                    'card_bg_2' => '#0d1a2e',
                ),
                array(
                    'verse_color' => '#f472b6',
                    'verse' => 'Ephesians 5:25',
                    'title' => 'Family',
                    'subtitle' => 'God\'s Design for the Home',
                    'desc' => 'God\'s blueprint for marriage, parenting, and family relationships rooted in Scripture. Building homes on the Rock.',
                    'card_bg_1' => '#0a1628',
                    'card_bg_2' => '#0d1a2e',
                ),
            );

            // Also get published sermons
            $sermons = get_posts(array(
                'post_type' => 'fm_sermon',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC',
            ));

            if (!empty($sermons)) :
                foreach ($sermons as $sermon) :
            ?>
            <div class="fm-teaching-card fm-fade-up" style="--fm-card-bg-1:#0a1628;--fm-card-bg-2:#0d1a2e">
                <div class="fm-verse" style="color:var(--fm-gold)"><?php echo esc_html(get_the_excerpt($sermon)); ?></div>
                <h3><?php echo esc_html(get_the_title($sermon)); ?></h3>
                <div class="fm-teaching-sub">Sermon by Dr. Boon</div>
                <p><?php echo wp_trim_words(get_the_content(null, false, $sermon), 20); ?></p>
                <a href="<?php echo get_permalink($sermon); ?>" class="fm-teaching-link">Read More →</a>
            </div>
            <?php
                endforeach;
            else :
                foreach ($teachings as $t) :
            ?>
            <div class="fm-teaching-card fm-fade-up" style="--fm-card-bg-1:<?php echo $t['card_bg_1']; ?>;--fm-card-bg-2:<?php echo $t['card_bg_2']; ?>">
                <div class="fm-verse" style="color:<?php echo $t['verse_color']; ?>"><?php echo esc_html($t['verse']); ?></div>
                <h3><?php echo esc_html($t['title']); ?></h3>
                <div class="fm-teaching-sub"><?php echo esc_html($t['subtitle']); ?></div>
                <p><?php echo esc_html($t['desc']); ?></p>
                <a href="#contact" class="fm-teaching-link">Learn More →</a>
            </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- ==================== SERVICES / SCHEDULE SECTION ==================== -->
<section class="fm-section fm-services" id="services">
    <div class="fm-container">
        <div class="fm-label"><span class="fm-gold-line"></span> Service Times</div>
        <h2 class="fm-section-title">Join Us for <span>Worship</span></h2>
        <p class="fm-section-subtitle">All are welcome. Come as you are — experience the presence of God.</p>

        <div class="fm-schedule-grid">
            <?php
            $schedule = array(
                array('day' => 'Sunday', 'time' => '9:00 AM', 'name' => 'Bible Study', 'verse' => '2 Timothy 2:15'),
                array('day' => 'Sunday', 'time' => '10:00 AM', 'name' => 'Morning Worship', 'verse' => 'Hebrews 10:25'),
                array('day' => 'Sunday', 'time' => '6:00 PM', 'name' => 'Evening Worship', 'verse' => 'Psalm 122:1'),
                array('day' => 'Daily', 'time' => '6:00 AM', 'name' => 'Morning Prayer', 'verse' => 'Psalm 5:3'),
                array('day' => 'Tuesday', 'time' => '10:00 AM', 'name' => "Women's Bible Class", 'verse' => 'Proverbs 31:25'),
                array('day' => 'Wednesday', 'time' => '6:00 PM', 'name' => 'Midweek Bible Study', 'verse' => 'Acts 2:42'),
                array('day' => 'Saturday', 'time' => '5:00 PM', 'name' => 'Youth Meeting', 'verse' => '1 Timothy 4:12'),
            );
            foreach ($schedule as $s) :
            ?>
            <div class="fm-schedule-card fm-fade-up">
                <div class="fm-day"><?php echo esc_html($s['day']); ?></div>
                <div class="fm-time"><?php echo esc_html($s['time']); ?></div>
                <div class="fm-service-name"><?php echo esc_html($s['name']); ?></div>
                <div class="fm-verse-ref">"<?php echo esc_html($s['verse']); ?>"</div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="fm-programs">
            <div class="fm-program-card fm-fade-up">
                <h4>📖 3-Month Bible Training Program</h4>
                <p>An intensive course covering Old & New Testament survey, church history, Christian living, and personal evangelism. Open to all believers who want to deepen their understanding of God's Word.</p>
                <div class="fm-verse-ref">"Study to show yourself approved unto God." — 2 Timothy 2:15</div>
                <a href="#contact" class="fm-btn fm-btn-gold fm-btn-rounded" style="margin-top:16px">Enroll Now</a>
            </div>
            <div class="fm-program-card fm-fade-up">
                <h4>🔴 Gospel Campaigns</h4>
                <p>Regular outreach programs to spread the Gospel in Vijayawada and surrounding areas. Join us in fulfilling the Great Commission — sharing the Good News with every person.</p>
                <div class="fm-verse-ref">"Go and make disciples of all nations." — Matthew 28:19</div>
                <a href="#events" class="fm-btn fm-btn-outline fm-btn-rounded" style="margin-top:16px">View Campaigns</a>
            </div>
        </div>
    </div>
</section>

<!-- ==================== EVENTS SECTION ==================== -->
<section class="fm-section fm-events" id="events">
    <div class="fm-container">
        <div class="fm-label"><span class="fm-gold-line"></span> Events</div>
        <h2 class="fm-section-title">Upcoming <span>Events</span></h2>
        <p class="fm-section-subtitle">Join us for special gatherings, campaigns, and training programs</p>

        <div class="fm-events-list">
            <?php
            $events = get_posts(array(
                'post_type' => 'fm_event',
                'posts_per_page' => 8,
                'orderby' => 'meta_value',
                'meta_key' => '_fm_event_date',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => '_fm_event_date',
                        'value' => date('Y-m-d', strtotime('-1 day')),
                        'compare' => '>=',
                        'type' => 'DATE',
                    ),
                ),
            ));

            if (!empty($events)) :
                foreach ($events as $event) :
                    $event_date = get_post_meta($event->ID, '_fm_event_date', true);
                    $event_time = get_post_meta($event->ID, '_fm_event_time', true);
                    $event_location = get_post_meta($event->ID, '_fm_event_location', true);
                    $terms = get_the_terms($event->ID, 'event_category');
                    $cat = $terms && !is_wp_error($terms) ? $terms[0]->slug : 'service';
                    $cat_label = $terms && !is_wp_error($terms) ? $terms[0]->name : 'Event';
            ?>
            <div class="fm-event-card fm-fade-up">
                <div class="fm-event-date">
                    <div class="fm-day"><?php echo date('d', strtotime($event_date)); ?></div>
                    <div class="fm-month"><?php echo date('M', strtotime($event_date)); ?></div>
                    <div class="fm-year"><?php echo date('Y', strtotime($event_date)); ?></div>
                </div>
                <div class="fm-event-info">
                    <span class="fm-event-type fm-event-type-<?php echo esc_attr($cat); ?>"><?php echo esc_html($cat_label); ?></span>
                    <h3><?php echo esc_html(get_the_title($event)); ?></h3>
                    <p><?php echo wp_trim_words(get_the_content(null, false, $event), 20); ?></p>
                    <div class="fm-event-meta">
                        <?php if ($event_time) : ?><span>🕐 <?php echo date('g:i A', strtotime($event_time)); ?></span><?php endif; ?>
                        <?php if ($event_location) : ?><span>📍 <?php echo esc_html($event_location); ?></span><?php endif; ?>
                    </div>
                </div>
                <div class="fm-event-learn">
                    <a href="#contact" class="fm-btn fm-btn-outline fm-btn-rounded">Learn More</a>
                </div>
            </div>
            <?php
                endforeach;
            else :
            ?>
            <div class="fm-event-card fm-fade-up">
                <div class="fm-event-date">
                    <div class="fm-day"><?php echo date('d'); ?></div>
                    <div class="fm-month"><?php echo date('M'); ?></div>
                    <div class="fm-year"><?php echo date('Y'); ?></div>
                </div>
                <div class="fm-event-info">
                    <span class="fm-event-type fm-event-type-campaign">Gospel Campaign</span>
                    <h3>Upcoming Gospel Outreach</h3>
                    <p>Stay tuned for our next Gospel campaign. Contact us to learn about upcoming outreach events in Vijayawada.</p>
                    <div class="fm-event-meta"><span>📞 +91 9440307307</span></div>
                </div>
                <div class="fm-event-learn">
                    <a href="#contact" class="fm-btn fm-btn-outline fm-btn-rounded">Learn More</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ==================== MINISTRIES SECTION ==================== -->
<section class="fm-section fm-ministries" id="ministries">
    <div class="fm-container">
        <div class="fm-label"><span class="fm-gold-line"></span> Ministries</div>
        <h2 class="fm-section-title">Our <span>Ministries</span></h2>
        <p class="fm-section-subtitle">Serving God and community through various outreach programs</p>

        <div class="fm-ministries-grid">
            <div class="fm-ministry-card fm-fade-up">
                <div class="fm-icon">📖</div>
                <h3>Bible Training</h3>
                <p>Comprehensive Bible education for all ages. From foundational teachings to advanced theological study, we equip believers with deep Scriptural knowledge.</p>
                <div class="fm-verse-ref">"Thy word is a lamp unto my feet." — Psalm 119:105</div>
            </div>
            <div class="fm-ministry-card fm-fade-up">
                <div class="fm-icon">🔴</div>
                <h3>Gospel Outreach</h3>
                <p>Active evangelism in Vijayawada and surrounding areas. Street campaigns, door-to-door visits, and community events to share the Good News.</p>
                <div class="fm-verse-ref">"Go ye into all the world." — Mark 16:15</div>
            </div>
            <div class="fm-ministry-card fm-fade-up">
                <div class="fm-icon">👨‍👩‍👧</div>
                <h3>Youth Ministry</h3>
                <p>Building the next generation of believers through Bible quizzes, leadership training, fellowship activities, and Gospel campaigns.</p>
                <div class="fm-verse-ref">"Train up a child in the way he should go." — Proverbs 22:6</div>
            </div>
            <div class="fm-ministry-card fm-fade-up">
                <div class="fm-icon">💐</div>
                <h3>Women's Ministry</h3>
                <p>Weekly Bible classes, prayer groups, and fellowship for women. Topics on faith, family, and Christian living.</p>
                <div class="fm-verse-ref">"She is clothed with strength and dignity." — Proverbs 31:25</div>
            </div>
            <div class="fm-ministry-card fm-fade-up">
                <div class="fm-icon">🤝</div>
                <h3>Community Service</h3>
                <p>Serving the community through practical help, prayer support, and meeting the needs of the less fortunate around Vijayawada.</p>
                <div class="fm-verse-ref">"Faith without works is dead." — James 2:26</div>
            </div>
            <div class="fm-ministry-card fm-fade-up">
                <div class="fm-icon">🙏</div>
                <h3>Prayer Ministry</h3>
                <p>Dedicated prayer warriors interceding for the church, community, and individuals. Submit your prayer requests and we will lift them to God.</p>
                <div class="fm-verse-ref">"Pray without ceasing." — 1 Thessalonians 5:17</div>
            </div>
        </div>

        <div class="fm-ministries-image fm-fade-up">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/community-prayer.png" alt="Community Prayer" loading="lazy">
        </div>
    </div>
</section>

<!-- ==================== GIVING SECTION ==================== -->
<section class="fm-section fm-give" id="give">
    <div class="fm-container">
        <div class="fm-label"><span class="fm-gold-line"></span> Give</div>
        <h2 class="fm-section-title">Support the <span>Ministry</span></h2>
        <p class="fm-section-subtitle">Your generous giving helps us spread the Gospel and serve the community</p>

        <div class="fm-impact-grid">
            <div class="fm-impact-card fm-fade-up">
                <div class="fm-icon">📖</div>
                <h4>Bible Training</h4>
                <p>Free programs for all</p>
            </div>
            <div class="fm-impact-card fm-fade-up">
                <div class="fm-icon">🔴</div>
                <h4>Gospel Campaigns</h4>
                <p>Spreading the Word</p>
            </div>
            <div class="fm-impact-card fm-fade-up">
                <div class="fm-icon">🤝</div>
                <h4>Community Help</h4>
                <p>Serving the needy</p>
            </div>
            <div class="fm-impact-card fm-fade-up">
                <div class="fm-icon">⛪</div>
                <h4>Church Operations</h4>
                <p>Daily ministry work</p>
            </div>
        </div>

        <div class="fm-giving-methods">
            <div class="fm-giving-card fm-fade-up">
                <h3>📱 WhatsApp / Call</h3>
                <div class="fm-giving-detail">
                    <div class="fm-label">Phone Number</div>
                    <div class="fm-value">+91 9440307307</div>
                </div>
                <p style="color:var(--fm-text-muted);font-size:0.85rem">Message us on WhatsApp to arrange giving or get bank details.</p>
            </div>
            <div class="fm-giving-card fm-fade-up">
                <h3>🏦 Bank Transfer</h3>
                <div class="fm-giving-detail">
                    <div class="fm-label">Contact for Details</div>
                    <div class="fm-value">Call +91 9440307307</div>
                </div>
                <p style="color:var(--fm-text-muted);font-size:0.85rem">Bank transfer details available upon request.</p>
            </div>
            <div class="fm-giving-card fm-fade-up">
                <h3>🏃 In Person</h3>
                <div class="fm-giving-detail">
                    <div class="fm-label">Visit the Church</div>
                    <div class="fm-value">During any service</div>
                </div>
                <p style="color:var(--fm-text-muted);font-size:0.85rem">Give in person during Sunday or weekday services.</p>
            </div>
        </div>

        <div style="text-align:center" class="fm-fade-up">
            <p style="font-style:italic;color:rgba(255,255,255,0.5);font-size:0.9rem;max-width:600px;margin:0 auto">
                "Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver."
                <br><span style="color:var(--fm-gold)">— 2 Corinthians 9:7</span>
            </p>
        </div>
    </div>
</section>

<!-- ==================== REVIEWS / TESTIMONIALS ==================== -->
<section class="fm-section fm-reviews" id="reviews">
    <div class="fm-container">
        <div class="fm-label"><span class="fm-gold-line"></span> Testimonials</div>
        <h2 class="fm-section-title">Lives <span>Touched</span></h2>
        <p class="fm-section-subtitle">Hear from those whose lives have been transformed</p>

        <div class="fm-reviews-grid">
            <div class="fm-review-card fm-fade-up">
                <div class="fm-review-stars">
                    <span class="fm-star">★</span><span class="fm-star">★</span><span class="fm-star">★</span><span class="fm-star">★</span><span class="fm-star">★</span>
                </div>
                <div class="fm-review-text">
                    "Dr. Boon's teaching transformed my understanding of the Bible. His clear, practical approach to Scripture has deepened my faith and strengthened my family. The church feels like home."
                </div>
                <div class="fm-review-author">
                    <div class="fm-review-avatar">RK</div>
                    <div class="fm-review-name">Rajesh Kumar</div>
                </div>
            </div>
            <div class="fm-review-card fm-fade-up">
                <div class="fm-review-stars">
                    <span class="fm-star">★</span><span class="fm-star">★</span><span class="fm-star">★</span><span class="fm-star">★</span><span class="fm-star">★</span>
                </div>
                <div class="fm-review-text">
                    "The Bible training program changed my life. I went from knowing little about Scripture to being able to teach others. Dr. Boon's dedication to God's Word is inspiring."
                </div>
                <div class="fm-review-author">
                    <div class="fm-review-avatar">SP</div>
                    <div class="fm-review-name">Sister Padma</div>
                </div>
            </div>
            <div class="fm-review-card fm-fade-up">
                <div class="fm-review-stars">
                    <span class="fm-star">★</span><span class="fm-star">★</span><span class="fm-star">★</span><span class="fm-star">★</span><span class="fm-star">★</span>
                </div>
                <div class="fm-review-text">
                    "Through the youth ministry, my children have grown in faith and found a community of believers their age. The Bible quizzes and fellowship have been a blessing to our family."
                </div>
                <div class="fm-review-author">
                    <div class="fm-review-avatar">VM</div>
                    <div class="fm-review-name">Venkat & Mary</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== PRAYER REQUEST SECTION ==================== -->
<section class="fm-section fm-prayer" id="prayer">
    <div class="fm-container">
        <div class="fm-label"><span class="fm-gold-line"></span> Prayer Request</div>
        <h2 class="fm-section-title">We're <span>Praying</span> For You</h2>
        <p class="fm-section-subtitle">Submit your prayer request and our congregation will lift it to God</p>

        <div class="fm-prayer-form" id="fmPrayerForm">
            <div class="fm-form-intro">
                "The prayer of a righteous person is powerful and effective." — James 5:16<br>
                Share your prayer needs with us. All requests are kept confidential.
            </div>

            <form id="fmPrayerFormElement">
                <div class="fm-form-row">
                    <div class="fm-form-group">
                        <label>Your Name <span class="fm-required">*</span></label>
                        <input type="text" name="name" required placeholder="Enter your name">
                    </div>
                    <div class="fm-form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="your@email.com">
                    </div>
                </div>
                <div class="fm-form-group">
                    <label>Phone (optional)</label>
                    <input type="tel" name="phone" placeholder="+91 XXXXX XXXXX">
                </div>
                <div class="fm-form-group">
                    <label>Your Prayer Request <span class="fm-required">*</span></label>
                    <textarea name="request" required placeholder="Share your prayer need..."></textarea>
                </div>
                <div class="fm-form-group">
                    <label class="fm-form-checkbox">
                        <input type="checkbox" name="urgent" value="1">
                        <span>This is an urgent prayer need</span>
                    </label>
                </div>
                <button type="submit" class="fm-prayer-submit">Submit Prayer Request 🙏</button>
            </form>

            <div class="fm-prayer-verse">
                "Do not be anxious about anything, but in every situation, by prayer and petition, with thanksgiving, present your requests to God." — Philippians 4:6
            </div>
        </div>

        <div class="fm-prayer-success" id="fmPrayerSuccess">
            <div class="fm-check">✓</div>
            <h3>Prayer Request Submitted</h3>
            <p>Thank you for sharing your prayer need. Our congregation and Dr. Boon will lift your request before God.</p>
            <blockquote>"The Lord is near to all who call on him." — Psalm 145:18</blockquote>
            <button class="fm-btn fm-btn-outline fm-btn-rounded" onclick="document.getElementById('fmPrayerSuccess').classList.remove('show');document.getElementById('fmPrayerFormElement').reset();">Submit Another Request</button>
        </div>
    </div>
</section>

<!-- ==================== NEWSLETTER SECTION ==================== -->
<section class="fm-newsletter" id="newsletter">
    <div class="fm-container">
        <h2>Stay Connected</h2>
        <p>Subscribe to receive ministry updates, event notifications, and spiritual encouragement.</p>
        <form class="fm-newsletter-form" id="fmNewsletterForm">
            <input type="email" name="email" placeholder="Enter your email address" required>
            <button type="submit">Subscribe</button>
        </form>
        <div class="fm-newsletter-success" id="fmNewsletterSuccess">
            <h3>Thank You! 🎉</h3>
            <p>You've been subscribed. Watch your inbox for ministry updates.</p>
        </div>
        <p class="fm-privacy">We respect your privacy. Unsubscribe anytime.</p>
    </div>
</section>

<!-- ==================== CONTACT SECTION ==================== -->
<section class="fm-section fm-contact" id="contact">
    <div class="fm-container">
        <div class="fm-label"><span class="fm-gold-line"></span> Contact</div>
        <h2 class="fm-section-title">Get in <span>Touch</span></h2>
        <p class="fm-section-subtitle">We'd love to hear from you. Reach out anytime.</p>

        <div class="fm-contact-grid">
            <div>
                <div class="fm-contact-item">
                    <div class="fm-contact-icon">📍</div>
                    <div>
                        <div class="fm-contact-label">Address</div>
                        <div class="fm-contact-value">
                            <?php echo nl2br(esc_html(get_option('fm_church_address', "D.No. 5-7-4/19K, 4th Line\nRCM Church Road, K.L. Rao Nagar\nChitti Nagar, Vijayawada – 520001\nAndhra Pradesh, India"))); ?>
                        </div>
                    </div>
                </div>
                <div class="fm-contact-item">
                    <div class="fm-contact-icon">📞</div>
                    <div>
                        <div class="fm-contact-label">Phone / WhatsApp</div>
                        <div class="fm-contact-value">
                            <a href="https://wa.me/<?php echo esc_attr(get_option('fm_whatsapp_number', '919440307307')); ?>" target="_blank" rel="noopener">+91 9440307307</a>
                        </div>
                    </div>
                </div>
                <div class="fm-contact-item">
                    <div class="fm-contact-icon">✉️</div>
                    <div>
                        <div class="fm-contact-label">Email</div>
                        <div class="fm-contact-value">
                            <a href="mailto:ksdboon@gmail.com">ksdboon@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="fm-contact-item">
                    <div class="fm-contact-icon">⏰</div>
                    <div>
                        <div class="fm-contact-label">Service Times</div>
                        <div class="fm-contact-value">
                            Sunday: 9 AM, 10 AM, 6 PM<br>
                            Daily Prayer: 6 AM<br>
                            Wed Bible Study: 6 PM
                        </div>
                    </div>
                </div>
            </div>
            <div class="fm-contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.6!2d80.6486!3d16.5062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTbCsDMwJzIyLjMiTiA4MMKwMzgnNTUuMCJF!5e0!3m2!1sen!2sin!4v1700000000000"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
