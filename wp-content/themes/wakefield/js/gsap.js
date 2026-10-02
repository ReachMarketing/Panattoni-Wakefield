// register plugins
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event) {

    // wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function(e) {

        let currentScrollTween = null;

        // Detect if a link's href goes to the current page
        function getSamePageAnchor(link) {
            if (
                link.protocol !== window.location.protocol ||
                link.host !== window.location.host ||
                link.pathname !== window.location.pathname ||
                link.search !== window.location.search
            ) {
                return false;
            }
            return link.hash;
        }

        // Scroll to a given hash, preventing the default event
        function scrollToHash(hash, e) {
            const elem = hash ? document.querySelector(hash) : false;
            if (elem) {
                if (e) e.preventDefault();

                if (currentScrollTween) {
                    currentScrollTween.kill();
                }

                currentScrollTween = gsap.to(window, {
                    scrollTo: {
                        y: elem,
                        offsetY: 85,
                        autoKill: false
                    },
                    ease: 'power4.out',
                    duration: 1.5,
                    onComplete: () => { currentScrollTween = null; },
                    onInterrupt: () => { currentScrollTween = null; }
                });
            }
        }

        // Interrupt Handlers
        const cancelScrollOnInteraction = () => {
            if (currentScrollTween) {
                currentScrollTween.kill();
                currentScrollTween = null;
            }
        };

        window.addEventListener('wheel', cancelScrollOnInteraction, { passive: true });
        window.addEventListener('mousedown', cancelScrollOnInteraction, { passive: true });
        window.addEventListener('touchmove', cancelScrollOnInteraction, { passive: true });

        // Link Listeners & On-Load Trigger
        document.querySelectorAll('a[href]').forEach(a => {
            a.addEventListener('click', e => {
                scrollToHash(getSamePageAnchor(a), e);
            });
        });

        scrollToHash(window.location.hash);

        // Simple Fade Animations
        gsap.utils.toArray('.fadeIn').forEach((element) => {
            gsap.set(element, { opacity: 0 });
            gsap.to(element, {
                opacity: 1,
                duration: 2,
                ease: 'power4.out',
                scrollTrigger: {
                    trigger: element,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                }
            });
        });

        gsap.utils.toArray('.fadeUp').forEach((element) => {
            gsap.set(element, { opacity: 0, y: 50 });
            gsap.to(element, {
                opacity: 1,
                duration: 2,
                y: 0,
                ease: 'power4.out',
                scrollTrigger: {
                    trigger: element,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                }
            });
        });

        // Batch Image galleries
        gsap.utils.toArray('section.image-block').forEach((parent, wrapperIndex) => {
            const children = parent.querySelectorAll('a');

            children.forEach((image, imageIndex) => {
                gsap.set(image, { opacity: 0, y: 50 });

                const imageTl = gsap.timeline({ paused: true });

                imageTl.to(image, {
                    opacity: 1,
                    y: 0,
                    duration: 2,
                    ease: 'power4.out',
                });

                image._imageTl = imageTl;
            });

            ScrollTrigger.batch(children, {
                start: 'top 85%',
                interval: 0.2,
                onEnter: (batch) => {
                    batch.forEach((image, index) => {
                        if (image._imageTl) {
                            gsap.delayedCall(index * 0.2, () => image._imageTl.play());
                        }
                    });
                },
                onLeaveBack: (batch) => {
                    batch.forEach((image) => {
                        if (image._imageTl) {
                            image._imageTl.reverse();
                        }
                    });
                }
            });
        });

        // Batch Image galleries
        gsap.utils.toArray('section.downloads-block').forEach((parent, wrapperIndex) => {
            const children = parent.querySelectorAll('a');

            children.forEach((image, imageIndex) => {
                gsap.set(image, { opacity: 0, y: 50 });

                const imageTl = gsap.timeline({ paused: true });

                imageTl.to(image, {
                    opacity: 1,
                    y: 0,
                    duration: 2,
                    ease: 'power4.out',
                });

                image._imageTl = imageTl;
            });

            ScrollTrigger.batch(children, {
                start: 'top 85%',
                interval: 0.2,
                onEnter: (batch) => {
                    batch.forEach((image, index) => {
                        if (image._imageTl) {
                            gsap.delayedCall(index * 0.2, () => image._imageTl.play());
                        }
                    });
                },
                onLeaveBack: (batch) => {
                    batch.forEach((image) => {
                        if (image._imageTl) {
                            image._imageTl.reverse();
                        }
                    });
                }
            });
        });
        

    }, false);
});