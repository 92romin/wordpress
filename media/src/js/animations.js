// Some code removed to keep work private.
import { gsap } from 'gsap';

export class Animations {

    constructor() {
        this.articles();
    }

    articles() {
        let sections = gsap.utils.toArray('section.articles');

        if(!sections.length) {
            return false
        }

        sections.forEach(section => {
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: section,
                    start: 'top center',
                }
            })

            let h2 = $('h2', section),
                article = $('article', section);

            tl.from(h2, {
                yPercent: 30,
                opacity: 0,
                duration: 1.5,
                ease: 'expo.out',
            }, 0)

            tl.from(article, {
                yPercent: 10,
                opacity: 0,
                duration: 1,
                stagger: 0.5,
                ease: 'expo.out',
            }, 0.5)
        });
    }
}