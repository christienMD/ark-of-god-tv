<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Ark of God TV</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Cormorant+Garamond:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* ================================================
           🎨 THEME SELECTOR - Change this ONE value!
           ================================================
           Options:
           1 = Platinum Silver   (#8E99A4) - Elegant & Modern (ACTIVE)
           2 = Gold              (#B8860B) - Warm Luxury
           3 = Royal Blue        (#2C5282) - Classic & Trustworthy
           4 = Stone             (#78716c) - Warm Sophisticated Gray
           5 = Teal              (#0d9488) - Professional Blue-Green
           6 = Zinc              (#71717a) - Cool Modern Gray
           7 = Rose Quartz       (#9f7a7a) - Elegant & Warm
           ================================================ */
        
        :root {
            --theme: 1; /* ← CHANGE THIS NUMBER (1-7) */
        }

        /* Theme 1: Platinum Silver - Elegant & Modern (DEFAULT) */
        [data-theme="1"] {
            --accent-primary: #8E99A4;
            --accent-secondary: #4a5568;
            --accent-glow: rgba(142, 153, 164, 0.5);
            --accent-glow-soft: rgba(142, 153, 164, 0.2);
            --text-title: #8E99A4;
            --bokeh-1: #8E99A4;
            --bokeh-2: #718096;
            --bokeh-3: #4a5568;
            --orbital-bg: rgba(20, 25, 30, 0.95);
            --orbital-bg-dark: rgba(10, 12, 15, 0.98);
            --bg-tertiary: #1a1f2e;
        }
        
        /* Theme 2: Gold - Warm Luxury */
        [data-theme="2"] {
            --accent-primary: #B8860B;
            --accent-secondary: #6b4f0a;
            --accent-glow: rgba(184, 134, 11, 0.5);
            --accent-glow-soft: rgba(184, 134, 11, 0.2);
            --text-title: #9A7B4F;
            --bokeh-1: #B8860B;
            --bokeh-2: #9a7209;
            --bokeh-3: #6b4f0a;
            --orbital-bg: rgba(30, 25, 15, 0.95);
            --orbital-bg-dark: rgba(15, 12, 8, 0.98);
            --bg-tertiary: #1f1a10;
        }
        
        /* Theme 3: Royal Blue - Classic & Trustworthy */
        [data-theme="3"] {
            --accent-primary: #3182CE;
            --accent-secondary: #2C5282;
            --accent-glow: rgba(49, 130, 206, 0.5);
            --accent-glow-soft: rgba(49, 130, 206, 0.2);
            --text-title: #3182CE;
            --bokeh-1: #3182CE;
            --bokeh-2: #2b6cb0;
            --bokeh-3: #2C5282;
            --orbital-bg: rgba(15, 25, 40, 0.95);
            --orbital-bg-dark: rgba(8, 15, 25, 0.98);
            --bg-tertiary: #0f1a2e;
        }
        
        /* Theme 4: Stone - Warm Sophisticated Gray */
        [data-theme="4"] {
            --accent-primary: #78716c;
            --accent-secondary: #57534e;
            --accent-glow: rgba(120, 113, 108, 0.5);
            --accent-glow-soft: rgba(120, 113, 108, 0.2);
            --text-title: #a8a29e;
            --bokeh-1: #78716c;
            --bokeh-2: #a8a29e;
            --bokeh-3: #57534e;
            --orbital-bg: rgba(25, 24, 22, 0.95);
            --orbital-bg-dark: rgba(15, 14, 13, 0.98);
            --bg-tertiary: #1c1917;
        }
        
        /* Theme 5: Teal - Professional Blue-Green */
        [data-theme="5"] {
            --accent-primary: #0d9488;
            --accent-secondary: #0f766e;
            --accent-glow: rgba(13, 148, 136, 0.5);
            --accent-glow-soft: rgba(13, 148, 136, 0.2);
            --text-title: #14b8a6;
            --bokeh-1: #0d9488;
            --bokeh-2: #14b8a6;
            --bokeh-3: #0f766e;
            --orbital-bg: rgba(8, 25, 23, 0.95);
            --orbital-bg-dark: rgba(4, 15, 14, 0.98);
            --bg-tertiary: #042f2e;
        }
        
        /* Theme 6: Zinc - Cool Modern Gray */
        [data-theme="6"] {
            --accent-primary: #71717a;
            --accent-secondary: #52525b;
            --accent-glow: rgba(113, 113, 122, 0.5);
            --accent-glow-soft: rgba(113, 113, 122, 0.2);
            --text-title: #a1a1aa;
            --bokeh-1: #71717a;
            --bokeh-2: #a1a1aa;
            --bokeh-3: #52525b;
            --orbital-bg: rgba(20, 20, 23, 0.95);
            --orbital-bg-dark: rgba(12, 12, 14, 0.98);
            --bg-tertiary: #18181b;
        }
        
        /* Theme 7: Rose Quartz - Elegant & Warm */
        [data-theme="7"] {
            --accent-primary: #9f7a7a;
            --accent-secondary: #7a5a5a;
            --accent-glow: rgba(159, 122, 122, 0.5);
            --accent-glow-soft: rgba(159, 122, 122, 0.2);
            --text-title: #b08888;
            --bokeh-1: #9f7a7a;
            --bokeh-2: #b08888;
            --bokeh-3: #7a5a5a;
            --orbital-bg: rgba(28, 20, 20, 0.95);
            --orbital-bg-dark: rgba(15, 10, 10, 0.98);
            --bg-tertiary: #1a1212;
        }

        /* Base/Shared Colors */
        :root {
            --bg-primary: #050d0d;
            --bg-secondary: #081215;
            --text-primary: #ffffff;
            --text-secondary: rgba(255, 255, 255, 0.8);
            --text-muted: rgba(255, 255, 255, 0.5);
            --nav-bg: rgba(0, 0, 0, 0.95);
            --nav-bg-fade: rgba(0, 0, 0, 0.6);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            height: 100%;
            overflow: hidden;
        }
        
        body {
            font-family: 'Outfit', sans-serif;
            background: radial-gradient(ellipse at center bottom, var(--bg-tertiary) 0%, var(--bg-secondary) 40%, var(--bg-primary) 100%);
            height: 100vh;
            color: var(--text-primary);
            position: relative;
            overflow: hidden;
        }
        
        /* Animated Background Particles - Enhanced with dots, bubbles and variety */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: 2;
        }
        
        /* Base particle style */
        .particle {
            position: absolute;
            border-radius: 50%;
        }
        
        /* ============ TINY DOTS - Gentle floating specks ============ */
        .dot {
            background: rgba(120, 200, 240, 0.9);
            box-shadow: 0 0 4px rgba(120, 200, 240, 0.6);
            animation: float-dot ease-in-out infinite;
        }
        
        .dot:nth-child(1) { width: 2px; height: 2px; left: 5%; top: 20%; animation-duration: 12s; animation-delay: 0s; }
        .dot:nth-child(2) { width: 3px; height: 3px; left: 12%; top: 45%; animation-duration: 15s; animation-delay: 1s; }
        .dot:nth-child(3) { width: 2px; height: 2px; left: 20%; top: 70%; animation-duration: 11s; animation-delay: 2s; }
        .dot:nth-child(4) { width: 2px; height: 2px; left: 30%; top: 15%; animation-duration: 14s; animation-delay: 0.5s; }
        .dot:nth-child(5) { width: 3px; height: 3px; left: 38%; top: 85%; animation-duration: 13s; animation-delay: 3s; }
        .dot:nth-child(6) { width: 2px; height: 2px; left: 45%; top: 35%; animation-duration: 16s; animation-delay: 1.5s; }
        .dot:nth-child(7) { width: 2px; height: 2px; left: 55%; top: 60%; animation-duration: 12s; animation-delay: 2.5s; }
        .dot:nth-child(8) { width: 3px; height: 3px; left: 62%; top: 10%; animation-duration: 14s; animation-delay: 0.8s; }
        .dot:nth-child(9) { width: 2px; height: 2px; left: 70%; top: 75%; animation-duration: 15s; animation-delay: 3.5s; }
        .dot:nth-child(10) { width: 2px; height: 2px; left: 78%; top: 30%; animation-duration: 11s; animation-delay: 1.2s; }
        .dot:nth-child(11) { width: 3px; height: 3px; left: 85%; top: 55%; animation-duration: 13s; animation-delay: 2.8s; }
        .dot:nth-child(12) { width: 2px; height: 2px; left: 92%; top: 80%; animation-duration: 16s; animation-delay: 0.3s; }
        .dot:nth-child(13) { width: 2px; height: 2px; left: 15%; top: 90%; animation-duration: 14s; animation-delay: 4s; }
        .dot:nth-child(14) { width: 2px; height: 2px; left: 50%; top: 5%; animation-duration: 12s; animation-delay: 2.2s; }
        .dot:nth-child(15) { width: 3px; height: 3px; left: 75%; top: 42%; animation-duration: 15s; animation-delay: 1.8s; }
        
        @keyframes float-dot {
            0%, 100% { 
                transform: translateY(0) translateX(0);
                opacity: 0.7;
            }
            25% { 
                transform: translateY(-20px) translateX(15px);
                opacity: 0.9;
            }
            50% { 
                transform: translateY(-10px) translateX(-12px);
                opacity: 0.8;
            }
            75% { 
                transform: translateY(-25px) translateX(8px);
                opacity: 0.85;
            }
        }
        
        /* ============ SMALL PARTICLES - Gentle floaters ============ */
        .particle-small {
            background: radial-gradient(circle, rgba(100, 180, 220, 0.8) 0%, rgba(100, 180, 220, 0.3) 50%, transparent 70%);
            animation: float-small ease-in-out infinite;
        }
        
        .particle-small:nth-child(16) { width: 4px; height: 4px; left: 8%; top: 25%; animation-duration: 18s; animation-delay: 0s; }
        .particle-small:nth-child(17) { width: 5px; height: 5px; left: 18%; top: 60%; animation-duration: 20s; animation-delay: 2s; }
        .particle-small:nth-child(18) { width: 4px; height: 4px; left: 28%; top: 40%; animation-duration: 16s; animation-delay: 4s; }
        .particle-small:nth-child(19) { width: 6px; height: 6px; left: 40%; top: 80%; animation-duration: 22s; animation-delay: 1s; }
        .particle-small:nth-child(20) { width: 5px; height: 5px; left: 52%; top: 20%; animation-duration: 19s; animation-delay: 3s; }
        .particle-small:nth-child(21) { width: 4px; height: 4px; left: 65%; top: 70%; animation-duration: 17s; animation-delay: 5s; }
        .particle-small:nth-child(22) { width: 6px; height: 6px; left: 78%; top: 35%; animation-duration: 21s; animation-delay: 2.5s; }
        .particle-small:nth-child(23) { width: 5px; height: 5px; left: 88%; top: 55%; animation-duration: 18s; animation-delay: 4.5s; }
        .particle-small:nth-child(24) { width: 4px; height: 4px; left: 95%; top: 15%; animation-duration: 20s; animation-delay: 1.5s; }
        .particle-small:nth-child(25) { width: 5px; height: 5px; left: 35%; top: 95%; animation-duration: 19s; animation-delay: 3.5s; }
        
        @keyframes float-small {
            0%, 100% { 
                transform: translateY(0) translateX(0) scale(1);
                opacity: 0.5;
            }
            25% {
                transform: translateY(-25px) translateX(15px) scale(1.2);
                opacity: 0.8;
            }
            50% { 
                transform: translateY(-50px) translateX(-10px) scale(1);
                opacity: 0.6;
            }
            75% {
                transform: translateY(-25px) translateX(20px) scale(1.1);
                opacity: 0.7;
            }
        }
        
        /* ============ MEDIUM BUBBLES - Soft floaters ============ */
        .bubble-medium {
            background: radial-gradient(circle at 30% 30%, rgba(140, 200, 240, 0.4) 0%, rgba(80, 160, 200, 0.2) 50%, transparent 70%);
            border: 1px solid rgba(150, 210, 250, 0.2);
            animation: float-bubble ease-in-out infinite;
        }
        
        .bubble-medium:nth-child(26) { width: 12px; height: 12px; left: 6%; top: 45%; animation-duration: 28s; animation-delay: 0s; }
        .bubble-medium:nth-child(27) { width: 16px; height: 16px; left: 15%; top: 75%; animation-duration: 32s; animation-delay: 3s; }
        .bubble-medium:nth-child(28) { width: 10px; height: 10px; left: 25%; top: 20%; animation-duration: 25s; animation-delay: 6s; }
        .bubble-medium:nth-child(29) { width: 14px; height: 14px; left: 60%; top: 85%; animation-duration: 30s; animation-delay: 2s; }
        .bubble-medium:nth-child(30) { width: 18px; height: 18px; left: 72%; top: 15%; animation-duration: 35s; animation-delay: 5s; }
        .bubble-medium:nth-child(31) { width: 11px; height: 11px; left: 85%; top: 50%; animation-duration: 26s; animation-delay: 1s; }
        .bubble-medium:nth-child(32) { width: 15px; height: 15px; left: 93%; top: 70%; animation-duration: 28s; animation-delay: 4s; }
        .bubble-medium:nth-child(33) { width: 13px; height: 13px; left: 45%; top: 10%; animation-duration: 33s; animation-delay: 7s; }
        
        @keyframes float-bubble {
            0%, 100% { 
                transform: translateY(0) translateX(0) scale(1);
                opacity: 0.35;
            }
            20% {
                transform: translateY(-30px) translateX(25px) scale(1.05);
                opacity: 0.5;
            }
            40% { 
                transform: translateY(-60px) translateX(-20px) scale(0.95);
                opacity: 0.4;
            }
            60% {
                transform: translateY(-40px) translateX(30px) scale(1.08);
                opacity: 0.55;
            }
            80% {
                transform: translateY(-70px) translateX(-15px) scale(1);
                opacity: 0.4;
            }
        }
        
        /* ============ LARGE ORBS - Slow atmospheric movement ============ */
        .orb-large {
            background: radial-gradient(circle at 35% 35%, rgba(100, 180, 220, 0.25) 0%, rgba(60, 140, 180, 0.1) 50%, transparent 70%);
            border: 1px solid rgba(120, 190, 230, 0.1);
            animation: drift-orb ease-in-out infinite;
        }
        
        .orb-large:nth-child(34) { width: 35px; height: 35px; left: 3%; top: 60%; animation-duration: 45s; animation-delay: 0s; }
        .orb-large:nth-child(35) { width: 45px; height: 45px; left: 88%; top: 25%; animation-duration: 55s; animation-delay: 5s; }
        .orb-large:nth-child(36) { width: 30px; height: 30px; left: 20%; top: 85%; animation-duration: 40s; animation-delay: 10s; }
        .orb-large:nth-child(37) { width: 40px; height: 40px; left: 75%; top: 70%; animation-duration: 50s; animation-delay: 3s; }
        .orb-large:nth-child(38) { width: 50px; height: 50px; left: 50%; top: 5%; animation-duration: 60s; animation-delay: 8s; }
        .orb-large:nth-child(39) { width: 38px; height: 38px; left: 10%; top: 10%; animation-duration: 48s; animation-delay: 2s; }
        
        @keyframes drift-orb {
            0%, 100% { 
                transform: translateY(0) translateX(0) scale(1);
                opacity: 0.2;
            }
            25% {
                transform: translateY(-40px) translateX(50px) scale(1.1);
                opacity: 0.35;
            }
            50% { 
                transform: translateY(-20px) translateX(-40px) scale(0.9);
                opacity: 0.25;
            }
            75% {
                transform: translateY(-60px) translateX(30px) scale(1.05);
                opacity: 0.3;
            }
        }
        
        /* ============ SPARKLES - Floating glowing particles ============ */
        .sparkle {
            background: rgba(180, 220, 255, 0.9);
            box-shadow: 0 0 6px rgba(180, 220, 255, 0.6), 0 0 12px rgba(180, 220, 255, 0.3);
            animation: float-sparkle ease-in-out infinite;
        }
        
        .sparkle:nth-child(40) { width: 3px; height: 3px; left: 10%; top: 25%; animation-duration: 14s; animation-delay: 0s; }
        .sparkle:nth-child(41) { width: 2px; height: 2px; left: 25%; top: 65%; animation-duration: 16s; animation-delay: 2s; }
        .sparkle:nth-child(42) { width: 3px; height: 3px; left: 40%; top: 40%; animation-duration: 13s; animation-delay: 4s; }
        .sparkle:nth-child(43) { width: 2px; height: 2px; left: 55%; top: 80%; animation-duration: 17s; animation-delay: 1s; }
        .sparkle:nth-child(44) { width: 3px; height: 3px; left: 70%; top: 18%; animation-duration: 14s; animation-delay: 3s; }
        .sparkle:nth-child(45) { width: 2px; height: 2px; left: 85%; top: 55%; animation-duration: 15s; animation-delay: 5s; }
        .sparkle:nth-child(46) { width: 2px; height: 2px; left: 18%; top: 38%; animation-duration: 16s; animation-delay: 6s; }
        .sparkle:nth-child(47) { width: 3px; height: 3px; left: 62%; top: 72%; animation-duration: 13s; animation-delay: 7s; }
        .sparkle:nth-child(48) { width: 2px; height: 2px; left: 90%; top: 12%; animation-duration: 15s; animation-delay: 8s; }
        
        @keyframes float-sparkle {
            0%, 100% { 
                transform: translateY(0) translateX(0) scale(1);
                opacity: 0.7;
            }
            20% { 
                transform: translateY(-18px) translateX(12px) scale(1.2);
                opacity: 0.95;
            }
            40% { 
                transform: translateY(-8px) translateX(-15px) scale(0.9);
                opacity: 0.75;
            }
            60% { 
                transform: translateY(-22px) translateX(8px) scale(1.1);
                opacity: 0.9;
            }
            80% { 
                transform: translateY(-12px) translateX(-10px) scale(1);
                opacity: 0.8;
            }
        }
        
        /* Bokeh Effects - Bigger and more dynamic */
        .bokeh {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.15;
            animation: bokeh-pulse 10s infinite ease-in-out;
            z-index: 1;
        }
        
        .bokeh-1 {
            width: 500px;
            height: 500px;
            background: rgba(80, 180, 220, 0.6);
            top: 0%;
            left: -5%;
            animation-delay: 0s;
        }
        
        .bokeh-2 {
            width: 400px;
            height: 400px;
            background: rgba(60, 140, 180, 0.5);
            top: 45%;
            right: 0%;
            animation-delay: 3s;
        }
        
        .bokeh-3 {
            width: 450px;
            height: 450px;
            background: rgba(40, 120, 160, 0.4);
            bottom: 5%;
            left: 25%;
            animation-delay: 5s;
        }
        
        .bokeh-4 {
            width: 350px;
            height: 350px;
            background: rgba(80, 160, 200, 0.3);
            top: 20%;
            right: 20%;
            animation-delay: 2s;
        }
        
        .bokeh-5 {
            width: 300px;
            height: 300px;
            background: rgba(60, 180, 200, 0.35);
            bottom: 30%;
            left: 5%;
            animation-delay: 4s;
        }
        
        @keyframes bokeh-pulse {
            0%, 100% { transform: scale(1) translateY(0); opacity: 0.15; }
            50% { transform: scale(1.4) translateY(-20px); opacity: 0.25; }
        }
        
        /* Main Container */
        .landing-container {
            position: relative;
            height: 100vh;
            width: 100%;
            z-index: 10;
            overflow: hidden;
        }
        
        /* Central Image */
        .central-figure {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 5;
            animation: figure-entrance 1.5s ease-out forwards;
            opacity: 0;
        }
        
        .central-figure img {
            max-height: 92vh;
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 20px 60px rgba(0, 0, 0, 0.8));
        }
        
        @keyframes figure-entrance {
            0% {
                opacity: 0;
                transform: translateX(-50%) translateY(50px) scale(0.95);
            }
            100% {
                opacity: 1;
                transform: translateX(-50%) translateY(0) scale(1);
            }
        }
        
        /* Individual Orbital Links - TDJakes Inspired Style */
        .orbital-link {
            position: absolute;
            width: 170px;
            height: 170px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: var(--text-primary);
            cursor: pointer;
            transition: box-shadow 0.5s ease, filter 0.5s ease;
            animation: orbital-entrance 0.8s ease-out forwards;
            opacity: 0;
            z-index: 20;
        }
        
        /* Varied sizes for different orbitals - 6 total (3 left, 3 right) */
        .orbital-1 { width: 175px; height: 175px; }
        .orbital-2 { width: 160px; height: 160px; }
        .orbital-3 { width: 150px; height: 150px; }
        .orbital-4 { width: 155px; height: 155px; }
        .orbital-5 { width: 170px; height: 170px; }
        .orbital-6 { width: 145px; height: 145px; }
        
        /* Main circle background */
        .orbital-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 50%;
            background: radial-gradient(ellipse at 30% 30%, rgba(40, 60, 70, 0.95) 0%, rgba(15, 25, 30, 0.98) 70%, rgba(8, 15, 18, 1) 100%);
            border: 1px solid rgba(100, 140, 160, 0.3);
            z-index: -1;
            transition: border-color 0.5s ease, box-shadow 0.5s ease;
        }
        
        /* Outer ring */
        .orbital-link::after {
            content: '';
            position: absolute;
            top: -8px;
            left: -8px;
            right: -8px;
            bottom: -8px;
            border-radius: 50%;
            border: 1px solid rgba(80, 120, 140, 0.25);
            z-index: -2;
        }
        
        /* Decorative arc segments container */
        .orbital-arcs {
            position: absolute;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            pointer-events: none;
        }
        
        /* Arc segment 1 - top left */
        .arc-segment {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid transparent;
        }
        
        .arc-1 {
            border-top-color: rgba(80, 180, 220, 0.6);
            border-left-color: rgba(80, 180, 220, 0.4);
            transform: rotate(-30deg);
            clip-path: polygon(0 0, 35% 0, 35% 35%, 0 35%);
        }
        
        .arc-2 {
            border-bottom-color: rgba(80, 180, 220, 0.6);
            border-right-color: rgba(80, 180, 220, 0.4);
            transform: rotate(-30deg);
            clip-path: polygon(65% 65%, 100% 65%, 100% 100%, 65% 100%);
        }
        
        .arc-3 {
            border-top-color: rgba(80, 180, 220, 0.3);
            transform: rotate(60deg);
            clip-path: polygon(40% 0, 60% 0, 60% 15%, 40% 15%);
        }
        
        /* Inner ring decoration */
        .inner-ring {
            position: absolute;
            top: 6px;
            left: 6px;
            right: 6px;
            bottom: 6px;
            border-radius: 50%;
            border: 1px solid rgba(80, 120, 140, 0.15);
            pointer-events: none;
            transition: border-color 0.5s ease;
        }
        
        /* Tick marks around the circle */
        .tick-marks {
            position: absolute;
            top: -12px;
            left: -12px;
            right: -12px;
            bottom: -12px;
            border-radius: 50%;
            pointer-events: none;
        }
        
        .tick-marks::before,
        .tick-marks::after {
            content: '';
            position: absolute;
            background: rgba(80, 180, 220, 0.5);
        }
        
        .tick-marks::before {
            width: 2px;
            height: 8px;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .tick-marks::after {
            width: 8px;
            height: 2px;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }
        
        /* Corner accent arcs - the curved lines at corners */
        .corner-arc {
            position: absolute;
            width: 40px;
            height: 40px;
            border: 2px solid transparent;
            border-radius: 50%;
            pointer-events: none;
            transition: border-color 0.5s ease;
        }
        
        .corner-arc-tl {
            top: -25px;
            left: -25px;
            border-top-color: rgba(80, 180, 220, 0.7);
            border-left-color: rgba(80, 180, 220, 0.5);
            transform: rotate(15deg);
        }
        
        .corner-arc-tr {
            top: -25px;
            right: -25px;
            border-top-color: rgba(80, 180, 220, 0.5);
            border-right-color: rgba(80, 180, 220, 0.7);
            transform: rotate(-15deg);
        }
        
        .corner-arc-bl {
            bottom: -25px;
            left: -25px;
            border-bottom-color: rgba(80, 180, 220, 0.5);
            border-left-color: rgba(80, 180, 220, 0.3);
            transform: rotate(-15deg);
        }
        
        .corner-arc-br {
            bottom: -25px;
            right: -25px;
            border-bottom-color: rgba(80, 180, 220, 0.7);
            border-right-color: rgba(80, 180, 220, 0.5);
            transform: rotate(15deg);
        }
        
        /* Subtle outer glow arc */
        .glow-arc {
            position: absolute;
            top: -30px;
            left: -30px;
            right: -30px;
            bottom: -30px;
            border-radius: 50%;
            border: 1px solid rgba(80, 180, 220, 0.15);
            pointer-events: none;
            transition: border-color 0.5s ease;
        }
        
        .glow-arc::before {
            content: '';
            position: absolute;
            top: -1px;
            left: 20%;
            width: 25%;
            height: 3px;
            background: linear-gradient(90deg, transparent, rgba(80, 180, 220, 0.6), transparent);
            border-radius: 2px;
            animation: glow-travel 8s linear infinite;
        }
        
        @keyframes glow-travel {
            0% { transform: rotate(0deg) translateX(0); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: rotate(360deg) translateX(0); opacity: 0; }
        }
        
        @keyframes orbital-entrance {
            0% {
                opacity: 0;
                transform: scale(0.5) translateY(30px);
            }
            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        
        .orbital-link:hover {
            /* No scale - just subtle glow enhancement */
        }
        
        .orbital-link:hover::before {
            border-color: rgba(80, 180, 220, 0.5);
            box-shadow: 
                0 0 25px rgba(80, 180, 220, 0.15),
                inset 0 0 20px rgba(80, 180, 220, 0.08);
            transition: all 0.5s ease;
        }
        
        .orbital-link:hover .corner-arc {
            border-top-color: rgba(80, 180, 220, 0.9);
            border-left-color: rgba(80, 180, 220, 0.7);
            border-right-color: rgba(80, 180, 220, 0.7);
            border-bottom-color: rgba(80, 180, 220, 0.9);
            transition: all 0.5s ease;
        }
        
        .orbital-link:hover .inner-ring {
            border-color: rgba(80, 180, 220, 0.25);
            transition: all 0.5s ease;
        }
        
        .orbital-link:hover .glow-arc {
            border-color: rgba(80, 180, 220, 0.25);
            transition: all 0.5s ease;
        }
        
        .orbital-link h3 {
            font-family: 'Cinzel', serif;
            font-size: 0.85rem;
            text-align: center;
            padding: 0 0.8rem;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            line-height: 1.3;
        }
        
        .orbital-link .icon {
            font-size: 1.5rem;
            margin-bottom: 0.4rem;
            opacity: 0.9;
        }
        
        /* Legacy glow-ring - now replaced with new design */
        .glow-ring {
            display: none;
        }
        
        /* Position Orbitals - 6 links around the figure (3 left, 3 right) - Closer to image, away from edges */
        .orbital-1 { 
            top: 5%; 
            left: 18%; 
            animation: orbital-entrance 0.8s ease-out forwards, float-1 8s ease-in-out infinite 1s;
        }
        .orbital-2 { 
            top: 30%; 
            left: 14%;
            animation: orbital-entrance 0.8s ease-out 0.15s forwards, float-2 7s ease-in-out infinite 1.2s;
        }
        .orbital-3 { 
            top: 55%; 
            left: 16%;
            animation: orbital-entrance 0.8s ease-out 0.3s forwards, float-3 9s ease-in-out infinite 1.4s;
        }
        .orbital-4 { 
            top: 3%; 
            right: 18%; 
            animation: orbital-entrance 0.8s ease-out 0.45s forwards, float-4 6s ease-in-out infinite 1.6s;
        }
        .orbital-5 { 
            top: 28%; 
            right: 14%; 
            animation: orbital-entrance 0.8s ease-out 0.6s forwards, float-5 8s ease-in-out infinite 1.8s;
        }
        .orbital-6 { 
            top: 53%; 
            right: 16%; 
            animation: orbital-entrance 0.8s ease-out 0.75s forwards, float-6 7.5s ease-in-out infinite 2s;
        }
        
        /* Subtle floating animations */
        @keyframes float-1 {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-8px) translateX(3px); }
        }
        
        @keyframes float-2 {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-6px) translateX(2px); }
        }
        
        @keyframes float-3 {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-7px) translateX(3px); }
        }
        
        @keyframes float-4 {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-10px) translateX(-3px); }
        }
        
        @keyframes float-5 {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-5px) translateX(-2px); }
        }
        
        @keyframes float-6 {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-8px) translateX(-2px); }
        }
        
        /* Bottom Navigation */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, var(--nav-bg) 0%, var(--nav-bg-fade) 70%, transparent 100%);
            padding: 1.8rem 2rem 1.2rem;
            display: flex;
            justify-content: center;
            gap: 3rem;
            z-index: 100;
        }
        
        .bottom-nav a {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.75rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding-bottom: 5px;
        }
        
        .bottom-nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 1px;
            background: var(--accent-primary);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .bottom-nav a:hover {
            color: var(--accent-primary);
        }
        
        .bottom-nav a:hover::after {
            width: 100%;
        }
        
        /* Title/Logo */
        .site-title {
            position: absolute;
            top: 1.5rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 25;
            text-align: center;
            animation: title-entrance 1s ease-out forwards;
            opacity: 0;
            white-space: nowrap;
        }
        
        @keyframes title-entrance {
            0% {
                opacity: 0;
                transform: translateX(-50%) translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }
        }
        
        .site-title h1 {
            font-family: 'Cinzel', serif;
            font-size: 1.8rem;
            font-weight: 600;
            letter-spacing: 8px;
            color: var(--text-title);
            text-transform: uppercase;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.5);
        }
        
        .site-title .tagline {
            font-family: 'Cormorant Garamond', serif;
            font-size: 0.85rem;
            font-weight: 300;
            letter-spacing: 5px;
            color: var(--text-muted);
            margin-top: 0.3rem;
            text-transform: uppercase;
        }
        
        /* Extra Large Desktop */
        @media (min-width: 1600px) {
            .orbital-1 { width: 190px; height: 190px; left: 20%; top: 4%; }
            .orbital-2 { width: 175px; height: 175px; left: 16%; top: 28%; }
            .orbital-3 { width: 160px; height: 160px; left: 18%; top: 52%; }
            .orbital-4 { width: 165px; height: 165px; right: 20%; top: 2%; }
            .orbital-5 { width: 180px; height: 180px; right: 16%; top: 26%; }
            .orbital-6 { width: 155px; height: 155px; right: 18%; top: 50%; }
            
            .orbital-link h3 {
                font-size: 1rem;
            }
            
            .orbital-link .icon {
                font-size: 1.8rem;
            }
            
            .corner-arc {
                width: 55px;
                height: 55px;
            }
            
            .corner-arc-tl { top: -32px; left: -32px; }
            .corner-arc-tr { top: -32px; right: -32px; }
            .corner-arc-bl { bottom: -32px; left: -32px; }
            .corner-arc-br { bottom: -32px; right: -32px; }
        }
        
        /* Large Desktop */
        @media (min-width: 1400px) and (max-width: 1599px) {
            .orbital-1 { width: 180px; height: 180px; left: 18%; top: 5%; }
            .orbital-2 { width: 165px; height: 165px; left: 14%; top: 29%; }
            .orbital-3 { width: 150px; height: 150px; left: 16%; top: 53%; }
            .orbital-4 { width: 155px; height: 155px; right: 18%; top: 3%; }
            .orbital-5 { width: 170px; height: 170px; right: 14%; top: 27%; }
            .orbital-6 { width: 145px; height: 145px; right: 16%; top: 51%; }
            
            .orbital-link h3 {
                font-size: 0.95rem;
            }
            
            .orbital-link .icon {
                font-size: 1.6rem;
            }
            
            .corner-arc {
                width: 50px;
                height: 50px;
            }
            
            .corner-arc-tl { top: -30px; left: -30px; }
            .corner-arc-tr { top: -30px; right: -30px; }
            .corner-arc-bl { bottom: -30px; left: -30px; }
            .corner-arc-br { bottom: -30px; right: -30px; }
        }
        
        /* Medium Desktop */
        @media (max-width: 1200px) {
            .orbital-1 { width: 155px; height: 155px; left: 14%; top: 6%; }
            .orbital-2 { width: 145px; height: 145px; left: 10%; top: 30%; }
            .orbital-3 { width: 135px; height: 135px; left: 12%; top: 54%; }
            .orbital-4 { width: 140px; height: 140px; right: 14%; top: 4%; }
            .orbital-5 { width: 150px; height: 150px; right: 10%; top: 28%; }
            .orbital-6 { width: 130px; height: 130px; right: 12%; top: 52%; }
            
            .orbital-link h3 {
                font-size: 0.8rem;
            }
            
            .orbital-link .icon {
                font-size: 1.4rem;
            }
            
            .central-figure img {
                max-height: 88vh;
            }
            
            .bottom-nav {
                gap: 1.5rem;
            }
            
            .corner-arc {
                width: 40px;
                height: 40px;
            }
            
            .corner-arc-tl { top: -25px; left: -25px; }
            .corner-arc-tr { top: -25px; right: -25px; }
            .corner-arc-bl { bottom: -25px; left: -25px; }
            .corner-arc-br { bottom: -25px; right: -25px; }
        }
        
        /* Tablet Landscape */
        @media (max-width: 1024px) {
            .orbital-1 { width: 140px; height: 140px; left: 10%; top: 8%; }
            .orbital-2 { width: 130px; height: 130px; left: 6%; top: 32%; }
            .orbital-3 { width: 120px; height: 120px; left: 8%; top: 56%; }
            .orbital-4 { width: 125px; height: 125px; right: 10%; top: 6%; }
            .orbital-5 { width: 135px; height: 135px; right: 6%; top: 30%; }
            .orbital-6 { width: 115px; height: 115px; right: 8%; top: 54%; }
            
            .orbital-link h3 {
                font-size: 0.7rem;
                padding: 0 0.5rem;
            }
            
            .orbital-link .icon {
                font-size: 1.2rem;
            }
            
            .central-figure img {
                max-height: 80vh;
            }
            
            .corner-arc {
                width: 35px;
                height: 35px;
            }
            
            .corner-arc-tl { top: -22px; left: -22px; }
            .corner-arc-tr { top: -22px; right: -22px; }
            .corner-arc-bl { bottom: -22px; left: -22px; }
            .corner-arc-br { bottom: -22px; right: -22px; }
        }
        
        /* Tablet Portrait */
        @media (max-width: 992px) {
            .orbital-1 { width: 125px; height: 125px; left: 6%; top: 8%; }
            .orbital-2 { width: 115px; height: 115px; left: 4%; top: 32%; }
            .orbital-3 { width: 105px; height: 105px; left: 5%; top: 56%; }
            .orbital-4 { width: 110px; height: 110px; right: 6%; top: 6%; }
            .orbital-5 { width: 120px; height: 120px; right: 4%; top: 30%; }
            .orbital-6 { width: 100px; height: 100px; right: 5%; top: 54%; }
            
            .orbital-link h3 {
                font-size: 0.65rem;
            }
            
            .orbital-link .icon {
                font-size: 1.1rem;
            }
            
            .central-figure img {
                max-height: 75vh;
            }
            
            .bottom-nav {
                gap: 1rem;
            }
            
            .bottom-nav a {
                font-size: 0.6rem;
                letter-spacing: 1px;
            }
            
            .site-title h1 {
                font-size: 1.4rem;
                letter-spacing: 5px;
            }
            
            .corner-arc {
                width: 30px;
                height: 30px;
            }
            
            .corner-arc-tl { top: -18px; left: -18px; }
            .corner-arc-tr { top: -18px; right: -18px; }
            .corner-arc-bl { bottom: -18px; left: -18px; }
            .corner-arc-br { bottom: -18px; right: -18px; }
            
            .glow-arc {
                top: -22px;
                left: -22px;
                right: -22px;
                bottom: -22px;
            }
            
            /* Hide large orbs and some bubbles on tablet */
            .orb-large {
                display: none;
            }
            .sparkle:nth-child(n+45) {
                display: none;
            }
        }
        
        /* Mobile Landscape / Large Mobile */
        @media (max-width: 768px) {
            .site-title {
                top: 1rem;
            }
            
            .site-title h1 {
                font-size: 1.3rem;
                letter-spacing: 4px;
            }
            
            .site-title .tagline {
                font-size: 0.7rem;
                letter-spacing: 3px;
            }
            
            .orbital-1 { width: 105px; height: 105px; left: 3%; top: 8%; }
            .orbital-2 { width: 95px; height: 95px; left: 2%; top: 32%; }
            .orbital-3 { width: 88px; height: 88px; left: 2%; top: 56%; }
            .orbital-4 { width: 92px; height: 92px; right: 3%; top: 6%; }
            .orbital-5 { width: 100px; height: 100px; right: 2%; top: 30%; }
            .orbital-6 { width: 85px; height: 85px; right: 2%; top: 54%; }
            
            .orbital-link h3 {
                font-size: 0.55rem;
                padding: 0 0.4rem;
                letter-spacing: 0.5px;
            }
            
            .orbital-link .icon {
                font-size: 1rem;
                margin-bottom: 0.2rem;
            }
            
            .central-figure {
                bottom: 40px;
            }
            
            .central-figure img {
                max-height: 58vh;
            }
            
            .bottom-nav {
                gap: 0.8rem;
                padding: 1.4rem 0.5rem 1rem;
            }
            
            .bottom-nav a {
                font-size: 0.55rem;
                letter-spacing: 1px;
            }
            
            .corner-arc {
                width: 25px;
                height: 25px;
                border-width: 1.5px;
            }
            
            .corner-arc-tl { top: -15px; left: -15px; }
            .corner-arc-tr { top: -15px; right: -15px; }
            .corner-arc-bl { bottom: -15px; left: -15px; }
            .corner-arc-br { bottom: -15px; right: -15px; }
            
            .glow-arc {
                top: -18px;
                left: -18px;
                right: -18px;
                bottom: -18px;
            }
            
            .inner-ring {
                top: 4px;
                left: 4px;
                right: 4px;
                bottom: 4px;
            }
            
            .tick-marks {
                top: -8px;
                left: -8px;
                right: -8px;
                bottom: -8px;
            }
            
            .tick-marks::before {
                height: 5px;
            }
            
            .tick-marks::after {
                width: 5px;
            }
            
            /* Hide larger particles on mobile */
            .orb-large, .bubble-medium {
                display: none;
            }
            .sparkle:nth-child(n+43) {
                display: none;
            }
            .dot:nth-child(n+10) {
                display: none;
            }
            
            .bokeh-4, .bokeh-5 {
                display: none;
            }
        }
        
        /* Small Mobile */
        @media (max-width: 480px) {
            .site-title h1 {
                font-size: 1.1rem;
                letter-spacing: 3px;
            }
            
            .site-title .tagline {
                font-size: 0.6rem;
            }
            
            .orbital-1 { width: 88px; height: 88px; left: 1%; top: 8%; }
            .orbital-2 { width: 80px; height: 80px; left: 0%; top: 32%; }
            .orbital-3 { width: 74px; height: 74px; left: 0%; top: 56%; }
            .orbital-4 { width: 78px; height: 78px; right: 1%; top: 6%; }
            .orbital-5 { width: 85px; height: 85px; right: 0%; top: 30%; }
            .orbital-6 { width: 72px; height: 72px; right: 0%; top: 54%; }
            
            .orbital-link h3 {
                font-size: 0.48rem;
                line-height: 1.3;
            }
            
            .orbital-link .icon {
                font-size: 0.9rem;
            }
            
            .central-figure img {
                max-height: 50vh;
            }
            
            .bottom-nav {
                gap: 0.5rem;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .bottom-nav a {
                font-size: 0.52rem;
                letter-spacing: 0.5px;
            }
            
            .corner-arc {
                width: 20px;
                height: 20px;
                border-width: 1px;
            }
            
            .corner-arc-tl { top: -12px; left: -12px; }
            .corner-arc-tr { top: -12px; right: -12px; }
            .corner-arc-bl { bottom: -12px; left: -12px; }
            .corner-arc-br { bottom: -12px; right: -12px; }
            
            .glow-arc {
                display: none;
            }
            
            /* Show fewer particles on small mobile */
            .orb-large, .bubble-medium, .sparkle {
                display: none;
            }
            .particle-small:nth-child(n+20) {
                display: none;
            }
            .dot:nth-child(n+8) {
                display: none;
            }
        }
        
        /* Very small screens */
        @media (max-width: 375px) {
            .site-title h1 {
                font-size: 0.95rem;
            }
            
            .orbital-1 { width: 75px; height: 75px; left: 0%; top: 8%; }
            .orbital-2 { width: 68px; height: 68px; left: -1%; top: 30%; }
            .orbital-3 { width: 62px; height: 62px; left: -1%; top: 52%; }
            .orbital-4 { width: 65px; height: 65px; right: 0%; top: 6%; }
            .orbital-5 { width: 72px; height: 72px; right: -1%; top: 28%; }
            .orbital-6 { width: 60px; height: 60px; right: -1%; top: 50%; }
            
            .orbital-link h3 {
                font-size: 0.42rem;
            }
            
            .orbital-link .icon {
                font-size: 0.75rem;
            }
            
            .central-figure img {
                max-height: 44vh;
            }
            
            .bottom-nav a {
                font-size: 0.48rem;
            }
            
            .corner-arc {
                width: 16px;
                height: 16px;
            }
            
            .corner-arc-tl { top: -10px; left: -10px; }
            .corner-arc-tr { top: -10px; right: -10px; }
            .corner-arc-bl { bottom: -10px; left: -10px; }
            .corner-arc-br { bottom: -10px; right: -10px; }
            
            .tick-marks, .inner-ring {
                display: none;
            }
            
            /* Minimal particles on very small screens */
            .orb-large, .bubble-medium, .sparkle, .particle-small {
                display: none;
            }
            .dot:nth-child(n+6) {
                display: none;
            }
        }
        
        /* Extra small screens */
        @media (max-width: 320px) {
            .orbital-1 { width: 65px; height: 65px; }
            .orbital-2 { width: 58px; height: 58px; }
            .orbital-3 { width: 52px; height: 52px; }
            .orbital-4 { width: 55px; height: 55px; }
            .orbital-5 { width: 62px; height: 62px; }
            .orbital-6 { width: 50px; height: 50px; }
            
            .orbital-link h3 {
                font-size: 0.38rem;
            }
            
            .orbital-link .icon {
                font-size: 0.65rem;
            }
            
            .central-figure img {
                max-height: 40vh;
            }
            
            .corner-arc {
                width: 14px;
                height: 14px;
            }
        }
    </style>
</head>
<body data-theme="1">
    <!-- 
    ╔═══════════════════════════════════════════════════════════╗
    ║  🎨 TO CHANGE THEME: Change data-theme value above        ║
    ║                                                           ║
    ║  1 = Platinum Silver  - Elegant & Modern (ACTIVE)         ║
    ║  2 = Gold             - Warm Luxury                       ║
    ║  3 = Royal Blue       - Classic & Trustworthy             ║
    ║  4 = Stone            - Warm Sophisticated Gray           ║
    ║  5 = Teal             - Professional Blue-Green           ║
    ║  6 = Zinc             - Cool Modern Gray                  ║
    ║  7 = Rose Quartz      - Elegant & Warm                    ║
    ╚═══════════════════════════════════════════════════════════╝
    -->
    
    <!-- Animated Background Elements -->
    <div class="particles">
        <!-- Tiny moving dots (1-15) -->
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <div class="particle dot"></div>
        <!-- Small floating particles (16-25) -->
        <div class="particle particle-small"></div>
        <div class="particle particle-small"></div>
        <div class="particle particle-small"></div>
        <div class="particle particle-small"></div>
        <div class="particle particle-small"></div>
        <div class="particle particle-small"></div>
        <div class="particle particle-small"></div>
        <div class="particle particle-small"></div>
        <div class="particle particle-small"></div>
        <div class="particle particle-small"></div>
        <!-- Medium bubbles (26-33) -->
        <div class="particle bubble-medium"></div>
        <div class="particle bubble-medium"></div>
        <div class="particle bubble-medium"></div>
        <div class="particle bubble-medium"></div>
        <div class="particle bubble-medium"></div>
        <div class="particle bubble-medium"></div>
        <div class="particle bubble-medium"></div>
        <div class="particle bubble-medium"></div>
        <!-- Large atmospheric orbs (34-39) -->
        <div class="particle orb-large"></div>
        <div class="particle orb-large"></div>
        <div class="particle orb-large"></div>
        <div class="particle orb-large"></div>
        <div class="particle orb-large"></div>
        <div class="particle orb-large"></div>
        <!-- Rising sparkles (40-48) -->
        <div class="particle sparkle"></div>
        <div class="particle sparkle"></div>
        <div class="particle sparkle"></div>
        <div class="particle sparkle"></div>
        <div class="particle sparkle"></div>
        <div class="particle sparkle"></div>
        <div class="particle sparkle"></div>
        <div class="particle sparkle"></div>
        <div class="particle sparkle"></div>
    </div>
    
    <div class="bokeh bokeh-1"></div>
    <div class="bokeh bokeh-2"></div>
    <div class="bokeh bokeh-3"></div>
    <div class="bokeh bokeh-4"></div>
    <div class="bokeh bokeh-5"></div>
    
    <!-- Main Container -->
    <div class="landing-container">
        <!-- Site Title -->
        <div class="site-title">
            <h1>APOSTLE JOHN CHI</h1>
            <!-- <p class="tagline">Welcome</p> -->
        </div>
        
        <!-- Orbital Links -->
        <a href="{{ route('home') }}" class="orbital-link orbital-1">
            <div class="inner-ring"></div>
            <div class="tick-marks"></div>
            <div class="corner-arc corner-arc-tl"></div>
            <div class="corner-arc corner-arc-br"></div>
            <div class="glow-arc"></div>
            <span class="icon">⛪</span>
            <h3>Ministry</h3>
        </a>
        
        <a href="{{ route('john-chi-foundation') }}" class="orbital-link orbital-2">
            <div class="inner-ring"></div>
            <div class="tick-marks"></div>
            <div class="corner-arc corner-arc-tr"></div>
            <div class="corner-arc corner-arc-bl"></div>
            <div class="glow-arc"></div>
            <span class="icon">🤝</span>
            <h3>Foundation</h3>
        </a>
        
        <a href="{{ route('give') }}" class="orbital-link orbital-3">
            <div class="inner-ring"></div>
            <div class="tick-marks"></div>
            <div class="corner-arc corner-arc-tl"></div>
            <div class="corner-arc corner-arc-br"></div>
            <div class="glow-arc"></div>
            <span class="icon">💝</span>
            <h3>Give</h3>
        </a>
        
        <a href="{{ route('partnership') }}" class="orbital-link orbital-4">
            <div class="inner-ring"></div>
            <div class="tick-marks"></div>
            <div class="corner-arc corner-arc-tr"></div>
            <div class="corner-arc corner-arc-bl"></div>
            <div class="glow-arc"></div>
            <span class="icon">🤲</span>
            <h3>Partnership</h3>
        </a>
        
        <a href="{{ route('blogs.index') }}" class="orbital-link orbital-5">
            <div class="inner-ring"></div>
            <div class="tick-marks"></div>
            <div class="corner-arc corner-arc-tl"></div>
            <div class="corner-arc corner-arc-br"></div>
            <div class="glow-arc"></div>
            <span class="icon">📖</span>
            <h3>Blogs</h3>
        </a>
        
        <a href="{{ route('branches.index') }}" class="orbital-link orbital-6">
            <div class="inner-ring"></div>
            <div class="tick-marks"></div>
            <div class="corner-arc corner-arc-tr"></div>
            <div class="corner-arc corner-arc-bl"></div>
            <div class="glow-arc"></div>
            <span class="icon">🌍</span>
            <h3>Branches</h3>
        </a>
        
        <!-- Central Figure -->
        <div class="central-figure">
            <img src="{{ asset('assets/images/john1-edit.png') }}" alt="Pastor John Chi">
        </div>
    </div>
    
    <!-- Bottom Navigation -->
    <nav class="bottom-nav">
        <a href="{{ route('home') }}">Ministry</a>
        <a href="{{ route('john-chi-foundation') }}">Foundation</a>
        <a href="{{ route('give') }}">Give</a>
        <a href="{{ route('partnership') }}">Partnership</a>
        <a href="{{ route('blogs.index') }}">Blogs</a>
        <a href="{{ route('branches.index') }}">Branches</a>
    </nav>
</body>
</html>
