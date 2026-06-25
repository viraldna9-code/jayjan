/* ============================================
   MBITE MINISTRY — Main JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {
  initNavbar();
  initMobileMenu();
  initScrollAnimations();
  initChatbot();
  initCTAForm();
  initSmoothScroll();
});

/* ============================================
   NAVBAR SCROLL EFFECT
   ============================================ */
function initNavbar() {
  const navbar = document.getElementById('navbar');
  let lastScroll = 0;

  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll > 60) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }

    lastScroll = currentScroll;
  }, { passive: true });
}

/* ============================================
   MOBILE MENU TOGGLE
   ============================================ */
function initMobileMenu() {
  const toggle = document.getElementById('navToggle');
  const menu = document.getElementById('navMenu');

  if (!toggle || !menu) return;

  toggle.addEventListener('click', () => {
    const isOpen = toggle.classList.toggle('active');
    menu.classList.toggle('active');
    toggle.setAttribute('aria-expanded', isOpen);
  });

  // Close menu when a link is clicked
  menu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      toggle.classList.remove('active');
      menu.classList.remove('active');
      toggle.setAttribute('aria-expanded', 'false');
    });
  });

  // Close on outside click
  document.addEventListener('click', (e) => {
    if (!toggle.contains(e.target) && !menu.contains(e.target)) {
      toggle.classList.remove('active');
      menu.classList.remove('active');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });
}

/* ============================================
   SCROLL ANIMATIONS (Intersection Observer)
   ============================================ */
function initScrollAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Add fade-up class to animatable elements
  const animatedElements = document.querySelectorAll(
    '.problem-card, .service-card, .event-card, .testimonial-card, .about-image-wrapper, .about-content, .cta-content, .cta-form-wrapper, .contact-info, .contact-map'
  );

  animatedElements.forEach(el => {
    el.classList.add('fade-up');
    observer.observe(el);
  });
}

/* ============================================
   CHATBOT — AI Bible Assistant Simulation
   ============================================ */
function initChatbot() {
  const input = document.getElementById('chatInput');
  const sendBtn = document.getElementById('chatSend');
  const messages = document.getElementById('chatMessages');
  const suggestions = document.querySelectorAll('.chat-suggestion');
  const langSelect = document.getElementById('langSelect');

  if (!input || !sendBtn || !messages) return;

  // Knowledge base for simulated responses
  const responses = {
    en: {
      'parable of the sower': {
        title: '3-Point Outline: Parable of the Sower (Matthew 13)',
        points: [
          'I. THE SOWER AND THE SEEDS — God\'s Word is generous and indiscriminate; it goes out to all hearts equally.',
          'II. THE FOUR SOILS — The condition of the heart determines the fruit: hardened (path), shallow (rocky), crowded (thorns), or receptive (good soil).',
          'III. THE HARVEST — Only the good soil produces fruit — 30, 60, 100-fold. Youth application: "Let the Word take deep root in your life."'
        ],
        illustration: '💡 Illustration idea: Plant seeds in four different pots during the service — show the results live.'
      },
      'ephesians 2:8-9': {
        title: 'Historical Context of Ephesians 2:8-9',
        points: [
          'Written by Paul (~60-62 AD) to the church in Ephesus, a major commercial and religious center.',
          'Ephesus housed the Temple of Artemis — the concept of "grace" (charis) was revolutionary in a works-based pagan culture.',
          'Paul emphasizes salvation is a gift of God\'s grace, not human effort — directly countering the temple\'s merit-based system.',
          'The "good works" mentioned in verse 10 are the result of salvation, not the cause.'
        ],
        illustration: '💡 Illustration: Grace is like a gift you didn\'t earn — you simply receive it with open hands.'
      },
      'mustard seed': {
        title: 'Illustrations for a Sermon on Faith (Mustard Seed)',
        points: [
          '🌱 Start small, grow big — The kingdom of God often begins in ways we overlook.',
          '🐦 Birds nesting in branches — Faith provides shelter for others when it grows.',
          '🌾 One seed, many seeds — Your faith multiplies; it\'s never just about you.'
        ],
        illustration: '💡 Bring an actual mustard seed and a large branch to show the contrast. Ask: "What\'s the smallest thing God has used in your life?"'
      },
      'fruits of the spirit': {
        title: 'Fruits of the Spirit — Galatians 5:22-23 Comparison',
        points: [
          '🇬🇷 Greek (KJV base): Love, Joy, Peace, Longsuffering, Gentleness, Goodness, Faith, Meekness, Temperance',
          '🇪🇸 Spanish (RVR1960): Amor, Gozo, Paz, Paciencia, Benignidad, Bondad, Fe, Mansedumbre, Templanza',
          '🇮🇳 Telugu (తెలుగు): ప్రేమ, ఆనందం, శాంతి, ఓర్పు, మృదుత్వం, మంచితనం, విశ్వాసం, మృదుత్వము, ఆత్మనిగ్రహం',
          'Key insight: The original Greek uses singular "fruit" (karpos) — these are not separate items but ONE unified harvest of the Spirit.'
        ],
        illustration: '💡 Show a vine with multiple grapes — one vine, many expressions.'
      },
      default: {
        title: 'Thank you for your question!',
        points: [
          'I\'m designed to help with Biblical context, sermon preparation, and ministry research.',
          'Try asking about specific Bible passages, sermon illustrations, or historical context.',
          'For deeper theological questions, I recommend consulting with Dr. Boon directly.'
        ],
        illustration: '💡 Try one of the suggested questions below!'
      }
    },
    es: {
      'parable of the sower': {
        title: 'Esquema de 3 Puntos: Parábola del Sembrador (Mateo 13)',
        points: [
          'I. EL SEMBRADOR Y LAS SEMILLAS — La Palabra de Dios es generosa e indiscriminada; sale a todos los corazones por igual.',
          'II. LOS CUATRO SUELOS — La condición del corazón determina el fruto: endurecido (camino), superficial (rocoso), ahogado (espinas), o receptivo (buena tierra).',
          'III. LA COSECHA — Solo la buena tierra produce fruto — 30, 60, 100 veces. Aplicación juvenil: "Deja que la Palabra eche raíces profundas en tu vida."'
        ],
        illustration: '💡 Idea: Planta semillas en cuatro macetas diferentes durante el servicio.'
      },
      default: {
        title: '¡Gracias por tu pregunta!',
        points: [
          'Estoy diseñado para ayudar con contexto bíblico, preparación de sermones e investigación ministerial.',
          'Intenta preguntar sobre pasajes bíblicos específicos, ilustraciones para sermones o contexto histórico.'
        ],
        illustration: '💡 ¡Prueba una de las preguntas sugeridas abajo!'
      }
    },
    te: {
      'parable of the sower': {
        title: '3 పాయింట్ల సమాధానం: విత్తుల విత్తనం (మత్తయి 13)',
        points: [
          'I. విత్తుడు మరియు విత్తనాలు — దేవుని వాక్యం ఉదారంగా మరియు పక్షపాతం లేకుండా అన్ని హృదయాలకు సమానంగా వెళ్తుంది.',
          'II. నాలుగు నేలలు — హృదయ స్థితి ఫలాన్ని నిర్ణయిస్తుంది: కఠినమైన (మార్గం), ఉప్పంగా (రాతి), అడ్డకట్టిన (ముళ్ళు), లేదా స్వీకరించిన (మంచి నేల).',
          'III. పంట — మంచి నేల మాత్రమే ఫలం ఇస్తుంది — 30, 60, 100 రెట్లు. యువత అనువర్తనం: "వాక్యం మీ జీవితంలో లోతైన వేరులు వేయనివ్వండి."'
        ],
        illustration: '💡 ఆలోచన: సమావేశంలో నాలుగు వేర్వేరు కుండలలో విత్తనాలు నాటండి.'
      },
      default: {
        title: 'మీ ప్రశ్నకు ధన్యవాదాలు!',
        points: [
          'నేను బైబిలు సందర్భం, ప్రసంగ తయారీ, మరియు మినిస్ట్రీ పరిశోధనకు సహాయం చేయడానికి డిజైన్ చేయబడ్డాను.',
          'నిర్దిష్ట బైబిలు ప్రకరణాలు, ప్రసంగ ఉదాహరణలు, లేదా చారిత్రక నేపథ్యం గురించి అడగండి.'
        ],
        illustration: '💡 దిగువ సూచించిన ప్రశ్నలలో ఒకదానిని ప్రయత్నించండి!'
      }
    }
  };

  function getResponse(question, lang) {
    const q = question.toLowerCase();
    const langResponses = responses[lang] || responses.en;

    if (q.includes('parable') && q.includes('sower') || q.includes('seme') && q.includes('sador') || q.includes('విత్తుల') || q.includes('విత్తన')) {
      return langResponses['parable of the sower'] || responses.en['parable of the sower'];
    }
    if (q.includes('ephesians') || q.includes('efesios') || q.includes('ఎఫెసియుల')) {
      return langResponses['ephesians 2:8-9'] || responses.en['ephesians 2:8-9'];
    }
    if (q.includes('mustard') || q.includes('mostaza') || q.includes('సెనగ') || q.includes('faith') || q.includes('fe') || q.includes('విశ్వాస')) {
      return langResponses['mustard seed'] || responses.en['mustard seed'];
    }
    if (q.includes('fruit') && q.includes('spirit') || q.includes('fruto') && q.includes('espíritu') || q.includes('ఫలం') && q.includes('ఆత్మ')) {
      return langResponses['fruits of the spirit'] || responses.en['fruits of the spirit'];
    }

    return langResponses.default || responses.en.default;
  }

  function addMessage(text, isUser = false) {
    const msgDiv = document.createElement('div');
    msgDiv.className = `chat-msg ${isUser ? 'user' : 'bot'}`;

    const bubble = document.createElement('div');
    bubble.className = 'chat-bubble';

    if (isUser) {
      bubble.innerHTML = `<p>${escapeHtml(text)}</p>`;
    } else {
      // Parse structured response
      let html = `<p><strong>${escapeHtml(text.title)}</strong></p>`;
      if (text.points) {
        html += '<ul>';
        text.points.forEach(point => {
          html += `<li>${escapeHtml(point)}</li>`;
        });
        html += '</ul>';
      }
      if (text.illustration) {
        html += `<p>${escapeHtml(text.illustration)}</p>`;
      }
      bubble.innerHTML = html;
    }

    msgDiv.appendChild(bubble);
    messages.appendChild(msgDiv);
    messages.scrollTop = messages.scrollHeight;
  }

  function escapeHtml(str) {
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
  }

  function showTypingIndicator() {
    const typing = document.createElement('div');
    typing.className = 'chat-msg bot';
    typing.id = 'typingIndicator';
    typing.innerHTML = `
      <div class="chat-bubble" style="display:flex;gap:4px;align-items:center;padding:12px 18px;">
        <span style="width:8px;height:8px;background:rgba(255,255,255,0.3);border-radius:50%;animation:typingBounce 1.4s infinite;"></span>
        <span style="width:8px;height:8px;background:rgba(255,255,255,0.3);border-radius:50%;animation:typingBounce 1.4s infinite 0.2s;"></span>
        <span style="width:8px;height:8px;background:rgba(255,255,255,0.3);border-radius:50%;animation:typingBounce 1.4s infinite 0.4s;"></span>
      </div>
    `;
    messages.appendChild(typing);
    messages.scrollTop = messages.scrollHeight;
  }

  function removeTypingIndicator() {
    const typing = document.getElementById('typingIndicator');
    if (typing) typing.remove();
  }

  function handleSend() {
    const question = input.value.trim();
    if (!question) return;

    addMessage(question, true);
    input.value = '';

    // Simulate AI thinking delay
    showTypingIndicator();
    setTimeout(() => {
      removeTypingIndicator();
      const lang = langSelect ? langSelect.value : 'en';
      const response = getResponse(question, lang);
      addMessage(response, false);
    }, 1200 + Math.random() * 800);
  }

  sendBtn.addEventListener('click', handleSend);
  input.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') handleSend();
  });

  // Suggestion buttons
  suggestions.forEach(btn => {
    btn.addEventListener('click', () => {
      input.value = btn.dataset.question;
      handleSend();
    });
  });

  // Add typing animation styles
  const style = document.createElement('style');
  style.textContent = `
    @keyframes typingBounce {
      0%, 60%, 100% { transform: translateY(0); }
      30% { transform: translateY(-6px); }
    }
  `;
  document.head.appendChild(style);
}

/* ============================================
   CTA FORM HANDLER
   ============================================ */
function initCTAForm() {
  const form = document.getElementById('ctaForm');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());

    // In production, this would POST to a backend
    // For now, show a success message
    const btn = form.querySelector('button[type="submit"]');
    const originalText = btn.innerHTML;

    btn.innerHTML = '<i class="fas fa-check"></i> Request Sent!';
    btn.style.background = '#34d399';
    btn.style.color = '#000';

    // Send via mailto fallback (opens email client)
    const subject = encodeURIComponent('Ministry Discovery Call Request');
    const body = encodeURIComponent(
      `Name: ${data.name}\n` +
      `Email: ${data.email}\n` +
      `Church: ${data.church || 'N/A'}\n` +
      `Challenge: ${data.challenge || 'N/A'}\n\n` +
      `Please schedule a 15-minute Ministry Discovery Call.`
    );
    window.location.href = `mailto:ksdboon@gmail.com?subject=${subject}&body=${body}`;

    setTimeout(() => {
      btn.innerHTML = originalText;
      btn.style.background = '';
      btn.style.color = '';
      form.reset();
    }, 3000);
  });
}

/* ============================================
   SMOOTH SCROLL FOR ANCHOR LINKS
   ============================================ */
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href === '#') return;

      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const navHeight = document.getElementById('navbar').offsetHeight;
        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navHeight - 20;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
}
