{{-- Rangoli / Paisley decorative section divider --}}
<div class="section-divider" aria-hidden="true">
  <svg viewBox="0 0 1300 36" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
    <defs>
      <pattern id="paisley-pat" x="0" y="0" width="130" height="36" patternUnits="userSpaceOnUse">
        <!-- Centre lotus bud — bigger & brighter -->
        <ellipse cx="65" cy="18" rx="7" ry="12"  fill="none" stroke="#F0A820" stroke-width="0.9" opacity="0.75"/>
        <ellipse cx="65" cy="18" rx="3.5" ry="7" fill="none" stroke="#FF8F40" stroke-width="0.8" opacity="0.65"/>
        <!-- Inner glow dot -->
        <circle cx="65" cy="18" r="1.5" fill="#F0A820" opacity="0.7"/>
        <!-- Left petal -->
        <path d="M58 18 C50 11, 40 13, 42 18 C40 23, 50 25, 58 18Z"
              fill="rgba(240,168,32,0.08)" stroke="#F0A820" stroke-width="0.7" opacity="0.6"/>
        <!-- Right petal -->
        <path d="M72 18 C80 11, 90 13, 88 18 C90 23, 80 25, 72 18Z"
              fill="rgba(240,168,32,0.08)" stroke="#F0A820" stroke-width="0.7" opacity="0.6"/>
        <!-- Outer petals (top/bottom) -->
        <path d="M65 6 C69 3, 73 6, 71 10 C69 14, 61 14, 59 10 C57 6, 61 3, 65 6Z"
              fill="rgba(255,107,16,0.06)" stroke="#FF6B10" stroke-width="0.6" opacity="0.5"/>
        <path d="M65 30 C69 33, 73 30, 71 26 C69 22, 61 22, 59 26 C57 30, 61 33, 65 30Z"
              fill="rgba(255,107,16,0.06)" stroke="#FF6B10" stroke-width="0.6" opacity="0.5"/>
        <!-- Accent dots -->
        <circle cx="36" cy="18" r="1.5" fill="#F0A820" opacity="0.55"/>
        <circle cx="94" cy="18" r="1.5" fill="#F0A820" opacity="0.55"/>
        <circle cx="20" cy="18" r="1"   fill="#FF8F40" opacity="0.35"/>
        <circle cx="110" cy="18" r="1"  fill="#FF8F40" opacity="0.35"/>
        <!-- Connecting lines -->
        <line x1="0"   y1="18" x2="30"  y2="18" stroke="#F0A820" stroke-width="0.5" opacity="0.35"/>
        <line x1="100" y1="18" x2="130" y2="18" stroke="#F0A820" stroke-width="0.5" opacity="0.35"/>
        <!-- Diamond accents -->
        <polygon points="65,2 68,5 65,8 62,5" fill="none" stroke="#FF8F40" stroke-width="0.5" opacity="0.4"/>
        <polygon points="65,28 68,31 65,34 62,31" fill="none" stroke="#FF8F40" stroke-width="0.5" opacity="0.4"/>
      </pattern>
    </defs>
    <rect width="1300" height="36" fill="url(#paisley-pat)"/>
  </svg>
</div>
