/**
 * INSTITUT CP - MAIN JAVASCRIPT MODULE
 */

document.addEventListener('DOMContentLoaded', () => {
    initStickyNavbar();
    initMobileMenu();
    initYouTubeBackground();
    initScrollObserver();
    initCustomVideoPlayer();
    initNextGenCarousel();
    initTestimonialsCarousel();
    initLanguageSwitcher();
    initPdfPreview();
});

function initPdfPreview() {
    const modal = document.getElementById('pdfPreviewModal');
    const frame = modal?.querySelector('.pdf-preview-frame');
    const title = modal?.querySelector('#pdfPreviewTitle');
    const download = modal?.querySelector('.pdf-preview-footer a');
    const previewButtons = document.querySelectorAll('[data-pdf-preview]');

    if (!modal || !frame || !title || !download || !previewButtons.length) return;

    let lastTrigger = null;

    const closeModal = () => {
        modal.hidden = true;
        document.body.classList.remove('pdf-preview-open');
        frame.src = '';
        lastTrigger?.focus();
    };

    previewButtons.forEach((button) => {
        button.addEventListener('click', () => {
            lastTrigger = button;
            const pdfUrl = button.dataset.pdfPreview;
            title.textContent = button.dataset.pdfTitle || 'Aperçu PDF';
            frame.src = `${pdfUrl}#toolbar=0&navpanes=0&view=FitH`;
            download.href = pdfUrl;
            modal.hidden = false;
            document.body.classList.add('pdf-preview-open');
            modal.querySelector('.pdf-preview-close').focus();
        });
    });

    modal.querySelectorAll('[data-pdf-close]').forEach((element) => {
        element.addEventListener('click', closeModal);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !modal.hidden) closeModal();
    });
}

/**
 * Handle sticky header scroll state
 */
function initStickyNavbar() {
    const header = document.querySelector('.site-header');
    if (!header) return;

    const handleScroll = () => {
        if (window.scrollY > 30) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
}

/**
 * Handle mobile navigation toggle
 */
function initMobileMenu() {
    const toggleBtn = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.navbar-nav');

    if (!toggleBtn || !navMenu) return;

    toggleBtn.addEventListener('click', () => {
        const isActive = navMenu.classList.toggle('mobile-active');
        toggleBtn.setAttribute('aria-expanded', isActive ? 'true' : 'false');
        toggleBtn.innerHTML = isActive 
            ? '<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>'
            : '<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>';
    });
}

/**
 * Load & Initialize YouTube Player for Hero Background Video
 */
function initYouTubeBackground() {
    const videoContainer = document.getElementById('youtube-hero-player');
    if (!videoContainer) return;

    const tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    const firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    window.onYouTubeIframeAPIReady = function() {
        new YT.Player('youtube-hero-player', {
            videoId: '5peR4WcZ07E',
            playerVars: {
                'autoplay': 1,
                'controls': 0,
                'showinfo': 0,
                'rel': 0,
                'loop': 1,
                'playlist': '5peR4WcZ07E',
                'mute': 1,
                'start': 15,
                'playsinline': 1,
                'enablejsapi': 1,
                'disablekb': 1,
                'iv_load_policy': 3,
                'modestbranding': 1
            },
            events: {
                'onReady': function(event) {
                    event.target.mute();
                    event.target.setPlaybackRate(0.5);
                    event.target.playVideo();
                },
                'onStateChange': function(event) {
                    if (event.data === YT.PlayerState.PLAYING) {
                        event.target.setPlaybackRate(0.5);
                    }
                    if (event.data === YT.PlayerState.ENDED) {
                        event.target.seekTo(15);
                        event.target.playVideo();
                    }
                }
            }
        });
    };
}

/**
 * Intersection Observer for Smooth Scroll Reveal Animations & Number Counters
 */
function initScrollObserver() {
    const revealElements = document.querySelectorAll('.reveal-on-scroll');
    if (!revealElements.length) return;

    const animateCounter = (el) => {
        const target = parseInt(el.getAttribute('data-target'), 10);
        if (isNaN(target)) return;
        const duration = 1800;
        const startTime = performance.now();

        const updateCount = (now) => {
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            // Easing: easeOutCubic
            const ease = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(target * ease);
            el.textContent = current;

            if (progress < 1) {
                requestAnimationFrame(updateCount);
            } else {
                el.textContent = target;
            }
        };

        requestAnimationFrame(updateCount);
    };

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                const counters = entry.target.querySelectorAll('.dna-metric-digit[data-target], .dna-gauge-number[data-target], .fluent-num-val[data-target]');
                counters.forEach(counter => animateCounter(counter));
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    revealElements.forEach(el => observer.observe(el));
}

/**
 * Custom Interactive Modern Video Player
 */
function initCustomVideoPlayer() {
    const wrapper = document.querySelector('.custom-video-wrapper');
    const video = document.querySelector('.custom-video-element');
    const playOverlay = document.querySelector('.video-play-overlay');
    const playToggleBtn = document.querySelector('.video-btn-play');
    const muteToggleBtn = document.querySelector('.video-btn-mute');
    const progressFill = document.querySelector('.video-progress-fill');
    const progressContainer = document.querySelector('.video-progress-container');
    const timeDisplay = document.querySelector('.video-time-display');
    const fullscreenBtn = document.querySelector('.video-btn-fullscreen');

    if (!wrapper || !video) return;

    const playWithSound = () => {
        video.muted = false;
        video.volume = 1.0;
        video.play();
        wrapper.classList.add('is-playing');
        updateMuteIcon(false);
        updatePlayIcon(true);
    };

    const togglePlay = (e) => {
        if (e) e.stopPropagation();
        if (video.paused) {
            playWithSound();
        } else {
            video.pause();
            wrapper.classList.remove('is-playing');
            updatePlayIcon(false);
        }
    };

    const toggleMute = (e) => {
        if (e) e.stopPropagation();
        video.muted = !video.muted;
        updateMuteIcon(video.muted);
    };

    const updatePlayIcon = (isPlaying) => {
        if (!playToggleBtn) return;
        playToggleBtn.innerHTML = isPlaying 
            ? '<svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>'
            : '<svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>';
    };

    const updateMuteIcon = (isMuted) => {
        if (!muteToggleBtn) return;
        muteToggleBtn.innerHTML = isMuted 
            ? '<svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z"/></svg>'
            : '<svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/></svg>';
    };

    const formatTime = (seconds) => {
        const mins = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return `${mins}:${secs < 10 ? '0' : ''}${secs}`;
    };

    video.addEventListener('timeupdate', () => {
        if (!video.duration) return;
        const pct = (video.currentTime / video.duration) * 100;
        if (progressFill) progressFill.style.width = `${pct}%`;
        if (timeDisplay) {
            timeDisplay.textContent = `${formatTime(video.currentTime)} / ${formatTime(video.duration)}`;
        }
    });

    if (progressContainer) {
        progressContainer.addEventListener('click', (e) => {
            e.stopPropagation();
            const rect = progressContainer.getBoundingClientRect();
            const pos = (e.clientX - rect.left) / rect.width;
            video.currentTime = pos * video.duration;
        });
    }

    if (fullscreenBtn) {
        fullscreenBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (video.requestFullscreen) {
                video.requestFullscreen();
            } else if (video.webkitRequestFullscreen) {
                video.webkitRequestFullscreen();
            }
        });
    }

    if (playOverlay) playOverlay.addEventListener('click', playWithSound);
    if (playToggleBtn) playToggleBtn.addEventListener('click', togglePlay);
    if (muteToggleBtn) muteToggleBtn.addEventListener('click', toggleMute);
    video.addEventListener('click', togglePlay);
}

/**
 * Home editorial carousel module
 */
function initNextGenCarousel() {
    const carousel = document.querySelector('.icp-nextgen-carousel');
    const track = document.querySelector('.nextgen-track');
    const cards = document.querySelectorAll('.nextgen-card');
    const prevBtn = document.querySelector('.nextgen-prev');
    const nextBtn = document.querySelector('.nextgen-next');
    const timelineBar = document.querySelector('.nextgen-timeline-bar');
    const currentLabel = document.querySelector('.nextgen-current');

    if (!carousel || !track || !cards.length) return;

    let currentIndex = 0;
    const totalCards = cards.length;

    const updateNextGenCarousel = () => {
        const cardWidth = cards[0].getBoundingClientRect().width;
        const gap = parseFloat(window.getComputedStyle(track).gap) || 0;
        const offset = currentIndex * (cardWidth + gap);
        track.style.transform = `translateX(-${offset}px)`;

        if (timelineBar) {
            timelineBar.style.transform = `translateX(${currentIndex * 100}%)`;
        }

        if (currentLabel) {
            currentLabel.textContent = String(currentIndex + 1).padStart(2, '0');
        }

        cards.forEach((card, index) => {
            const isCurrent = index === currentIndex;
            card.setAttribute('aria-hidden', isCurrent ? 'false' : 'true');
            card.querySelectorAll('a, button').forEach((control) => {
                control.tabIndex = isCurrent ? 0 : -1;
            });
        });
    };

    const goToNextGenSlide = (index) => {
        if (index < 0) {
            currentIndex = totalCards - 1;
        } else if (index >= totalCards) {
            currentIndex = 0;
        } else {
            currentIndex = index;
        }
        updateNextGenCarousel();
    };

    if (prevBtn) prevBtn.addEventListener('click', () => goToNextGenSlide(currentIndex - 1));
    if (nextBtn) nextBtn.addEventListener('click', () => goToNextGenSlide(currentIndex + 1));

    carousel.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowLeft') {
            event.preventDefault();
            goToNextGenSlide(currentIndex - 1);
        }

        if (event.key === 'ArrowRight') {
            event.preventDefault();
            goToNextGenSlide(currentIndex + 1);
        }
    });

    let touchStartX = 0;

    carousel.addEventListener('touchstart', (event) => {
        touchStartX = event.changedTouches[0].screenX;
    }, { passive: true });

    carousel.addEventListener('touchend', (event) => {
        const distance = event.changedTouches[0].screenX - touchStartX;
        if (Math.abs(distance) < 45) return;
        goToNextGenSlide(distance > 0 ? currentIndex - 1 : currentIndex + 1);
    }, { passive: true });

    window.addEventListener('resize', updateNextGenCarousel);
    updateNextGenCarousel();
}

/**
 * High-End Testimonials Carousel Module
 */
function initTestimonialsCarousel() {
    const carousel = document.getElementById('testiCarousel');
    const track = document.getElementById('testiTrack');
    const slides = document.querySelectorAll('.testi-slide');
    const prevBtn = document.getElementById('testiPrev');
    const nextBtn = document.getElementById('testiNext');
    const dots = document.querySelectorAll('.testi-dot');

    if (!carousel || !track || !slides.length) return;

    let currentIndex = 0;
    const totalSlides = slides.length;
    let autoPlayInterval = null;

    const getVisibleSlidesCount = () => {
        const width = window.innerWidth;
        if (width <= 680) return 1;
        if (width <= 1024) return 2;
        return 3;
    };

    const getMaxIndex = () => {
        const visible = getVisibleSlidesCount();
        return Math.max(0, totalSlides - visible);
    };

    const updateCarousel = () => {
        const visible = getVisibleSlidesCount();
        const maxIndex = getMaxIndex();

        // Clamp index
        if (currentIndex > maxIndex) currentIndex = maxIndex;
        if (currentIndex < 0) currentIndex = 0;

        const slideWidth = slides[0].getBoundingClientRect().width;
        // 1.75rem = 28px gap
        const gap = 28;
        const offset = currentIndex * (slideWidth + gap);

        track.style.transform = `translateX(-${offset}px)`;

        // Update dots
        dots.forEach((dot, idx) => {
            if (idx === currentIndex) {
                dot.classList.add('testi-dot--active');
                dot.setAttribute('aria-selected', 'true');
            } else {
                dot.classList.remove('testi-dot--active');
                dot.setAttribute('aria-selected', 'false');
            }
        });

        // Hide arrows/dots if all items fit in view
        if (maxIndex === 0) {
            if (prevBtn) prevBtn.style.display = 'none';
            if (nextBtn) nextBtn.style.display = 'none';
            const dotsContainer = document.getElementById('testiDots');
            if (dotsContainer) dotsContainer.style.display = 'none';
        } else {
            if (prevBtn) prevBtn.style.display = 'flex';
            if (nextBtn) nextBtn.style.display = 'flex';
            const dotsContainer = document.getElementById('testiDots');
            if (dotsContainer) dotsContainer.style.display = 'flex';
        }
    };

    const goToSlide = (index) => {
        const maxIndex = getMaxIndex();
        if (maxIndex === 0) return;

        if (index > maxIndex) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = maxIndex;
        } else {
            currentIndex = index;
        }
        updateCarousel();
    };

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            goToSlide(currentIndex - 1);
            resetAutoPlay();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            goToSlide(currentIndex + 1);
            resetAutoPlay();
        });
    }

    dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
            goToSlide(idx);
            resetAutoPlay();
        });
    });

    // Touch Swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    carousel.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        stopAutoPlay();
    }, { passive: true });

    carousel.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 45) {
            if (diff > 0) {
                goToSlide(currentIndex + 1);
            } else {
                goToSlide(currentIndex - 1);
            }
        }
        startAutoPlay();
    }, { passive: true });

    // Auto-play (every 6 seconds if multiple pages available)
    const startAutoPlay = () => {
        if (getMaxIndex() > 0 && !autoPlayInterval) {
            autoPlayInterval = setInterval(() => {
                goToSlide(currentIndex + 1);
            }, 6000);
        }
    };

    const stopAutoPlay = () => {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
            autoPlayInterval = null;
        }
    };

    const resetAutoPlay = () => {
        stopAutoPlay();
        startAutoPlay();
    };

    carousel.addEventListener('mouseenter', stopAutoPlay);
    carousel.addEventListener('mouseleave', startAutoPlay);

    window.addEventListener('resize', updateCarousel);

    // Initial calculation
    updateCarousel();
    startAutoPlay();
}

/**
 * Language Switcher Widget & Google Translate Integration (Instant Live Translation)
 */
function initLanguageSwitcher() {
    const langBtn = document.getElementById('langBtn');
    const langDropdown = document.getElementById('langDropdown');
    const langItems = document.querySelectorAll('.lang-item');
    const currentFlag = document.getElementById('currentLangFlag');
    const currentCode = document.getElementById('currentLangCode');

    if (!langBtn || !langDropdown) return;

    // Toggle dropdown
    langBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        const expanded = langBtn.getAttribute('aria-expanded') === 'true';
        langBtn.setAttribute('aria-expanded', !expanded);
        langDropdown.classList.toggle('show');
    });

    document.addEventListener('click', () => {
        langBtn.setAttribute('aria-expanded', 'false');
        langDropdown.classList.remove('show');
    });

    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
        return null;
    }

    function updateUI(lang, flag, code) {
        let flagSrc = flag;
        let langCode = code;

        const activeItem = Array.from(langItems).find(item => item.getAttribute('data-lang') === lang);
        if (activeItem) {
            if (!flagSrc || !flagSrc.includes('/')) {
                flagSrc = activeItem.getAttribute('data-flag');
            }
            if (!langCode) {
                langCode = activeItem.getAttribute('data-code');
            }
        }

        if (currentFlag) {
            if (currentFlag.tagName === 'IMG' && flagSrc) {
                currentFlag.src = flagSrc;
                currentFlag.alt = langCode || lang;
            } else if (flag) {
                currentFlag.textContent = flag;
            }
        }

        if (currentCode && langCode) {
            currentCode.textContent = langCode;
        }

        langItems.forEach(item => {
            if (item.getAttribute('data-lang') === lang) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    }

    function clearAllGoogTransCookies() {
        const hostname = window.location.hostname;
        const pastDate = 'Thu, 01 Jan 1970 00:00:00 UTC';
        
        document.cookie = `googtrans=; expires=${pastDate}; path=/;`;
        document.cookie = `googtrans=; expires=${pastDate}; path=/; max-age=0;`;
        document.cookie = `googtrans=; expires=${pastDate};`;
        
        const hostParts = hostname.split('.');
        for (let i = 0; i < hostParts.length; i++) {
            const dom = hostParts.slice(i).join('.');
            if (dom) {
                document.cookie = `googtrans=; expires=${pastDate}; path=/; domain=${dom};`;
                document.cookie = `googtrans=; expires=${pastDate}; path=/; domain=.${dom};`;
                document.cookie = `googtrans=; expires=${pastDate}; domain=${dom};`;
                document.cookie = `googtrans=; expires=${pastDate}; domain=.${dom};`;
            }
        }
        
        document.cookie = `user_icp_lang=fr; path=/; max-age=31536000`;
        document.cookie = `user_icp_code=FR; path=/; max-age=31536000`;
    }

    function setTranslationCookies(lang, flag, code) {
        const domain = window.location.hostname;
        const rootDomain = domain.includes('.') ? '.' + domain.split('.').slice(-2).join('.') : '';
        
        if (lang === 'fr') {
            clearAllGoogTransCookies();
        } else {
            const googVal = `/fr/${lang}`;
            document.cookie = `googtrans=${googVal}; path=/;`;
            document.cookie = `googtrans=${googVal}; path=/; domain=${domain};`;
            if (rootDomain) document.cookie = `googtrans=${googVal}; path=/; domain=${rootDomain};`;
            document.cookie = `user_icp_lang=${lang}; path=/; max-age=31536000`;
            document.cookie = `user_icp_flag=${flag}; path=/; max-age=31536000`;
            document.cookie = `user_icp_code=${code}; path=/; max-age=31536000`;
        }
    }

    function triggerGoogleTranslateCombo(lang) {
        const select = document.querySelector('.goog-te-combo') || document.querySelector('#google_translate_element select');
        if (select) {
            const targetVal = (lang === 'fr') ? '' : lang;
            select.value = targetVal;
            select.dispatchEvent(new Event('change', { bubbles: true }));
            select.dispatchEvent(new Event('input', { bubbles: true }));
            return true;
        }
        return false;
    }

    window.setLanguage = function(lang, flag, code) {
        updateUI(lang, flag, code);

        if (lang === 'fr') {
            clearAllGoogTransCookies();
            
            // Try to trigger restore in any Google frame if present
            try {
                const iframes = document.querySelectorAll('iframe');
                iframes.forEach(iframe => {
                    try {
                        const doc = iframe.contentDocument || iframe.contentWindow.document;
                        const restoreBtn = doc.querySelector('button[id*="restore"], #\\:1\\.restore, .goog-te-banner-frame button, .goog-close-link');
                        if (restoreBtn) restoreBtn.click();
                    } catch(e) {}
                });
            } catch(e) {}

            triggerGoogleTranslateCombo('fr');
            // Clean page reload guarantees pristine original French
            location.reload();
            return;
        }

        // For all other languages: live instant translate
        setTranslationCookies(lang, flag, code);

        if (!triggerGoogleTranslateCombo(lang)) {
            let count = 0;
            const checkInterval = setInterval(() => {
                count++;
                if (triggerGoogleTranslateCombo(lang) || count > 30) {
                    clearInterval(checkInterval);
                }
            }, 50);
        }
    };

    langItems.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            const lang = item.getAttribute('data-lang');
            const flag = item.getAttribute('data-flag');
            const code = item.getAttribute('data-code');
            window.setLanguage(lang, flag, code);
            langDropdown.classList.remove('show');
            langBtn.setAttribute('aria-expanded', 'false');
        });
    });

    const savedLang = getCookie('user_icp_lang') || 'fr';
    const savedFlag = getCookie('user_icp_flag') || '🇫🇷';
    const savedCode = getCookie('user_icp_code') || 'FR';
    updateUI(savedLang, savedFlag, savedCode);

    if (savedLang === 'fr') {
        const rawGoog = getCookie('googtrans');
        if (rawGoog && rawGoog !== '/fr/fr' && rawGoog !== '') {
            clearAllGoogTransCookies();
        }
    } else {
        let attempts = 0;
        const checkComboInterval = setInterval(() => {
            attempts++;
            if (triggerGoogleTranslateCombo(savedLang) || attempts > 25) {
                clearInterval(checkComboInterval);
            }
        }, 100);
    }
}

// Lock document.body against Google Translate banner shifts
(function preventGoogleTranslateBannerShift() {
    const lockBody = () => {
        if (document.body) {
            if (document.body.style.top && document.body.style.top !== '0px') {
                document.body.style.top = '0px';
            }
            if (document.body.style.position && document.body.style.position === 'relative') {
                document.body.style.position = 'static';
            }
        }
    };

    if (document.body) {
        const observer = new MutationObserver(lockBody);
        observer.observe(document.body, { attributes: true, attributeFilter: ['style', 'class'] });
    } else {
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new MutationObserver(lockBody);
            observer.observe(document.body, { attributes: true, attributeFilter: ['style', 'class'] });
        });
    }
})();

// Load Google Translate API dynamically & early
(function loadGoogleTranslate() {
    window.googleTranslateElementInit = function() {
        if (window.google && window.google.translate) {
            new window.google.translate.TranslateElement({
                pageLanguage: 'fr',
                includedLanguages: 'fr,en,es,zh-CN,de,ar',
                autoDisplay: false,
                multilanguagePage: true
            }, 'google_translate_element');
        }
    };

    if (!document.getElementById('google-translate-script')) {
        const script = document.createElement('script');
        script.id = 'google-translate-script';
        script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
        script.async = true;
        document.head.appendChild(script);
    }
})();
