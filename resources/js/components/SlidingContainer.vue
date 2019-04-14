<template>
    <div :id="id" :direction="direction" v-scroll="scrollSlideHandler" :slideDistance="slideDistance" :rangeOffset="rangeOffset" ref="slideContainer">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: {
            id: {
                type: String,
                required: true
            },
            direction: {
                type: String,
                required: true,
                default: 'left',
                validator: function (value) {
                    return [
                        'left',
                        'right',
                        'top',
                        'bottom'
                    ].indexOf(value) !== -1
                }
            },
            slideDistance: {
                type: Number,
                default: 200
            },
            rangeOffset: {
                type: Number,
                default: 0
            }
        },

        data() {
            return {
                progress: 0,
                elementWidth: 0,
                elementHeight: 0,
            }
        },

        mounted() {
            //console.log('Component mounted.')
        },

        methods: {
            scrollSlideHandler(event, el) {
                if (this.elementWidth > 0 && this.elementHeight > 0)
                {
                    // need to get the bounds of the element in real time
                    let containerBounds = this.$refs.slideContainer.getBoundingClientRect();

                    // get the center of the element
                    let positionX = containerBounds.left + this.elementWidth / 2;
                    let positionY = containerBounds.top + this.elementHeight / 2;

                    let max = (window.innerHeight / 2) - this.rangeOffset;
                    let min = window.innerHeight - this.rangeOffset;

                    // calculate the animation progress based on the position of the element
                    // by default, 100% when the element's center reaches the center of the page, 0% if the element is outside the browser height
                    // we're also limiting the values.
                    this.progress = Math.min(Math.max(0, (positionY - min) / (max - min)), 1);

                    el.setAttribute(
                        'style',
                        'position: relative; ' + this.direction + ': ' + (this.slideDistance - (this.slideDistance * this.progress)) + 'px; opacity:' + this.progress
                    );
                }
            },
            calculateContainerProperties() {
                this.elementWidth = this.$refs.slideContainer.clientWidth;
                this.elementHeight = this.$refs.slideContainer.clientHeight;
            }
        },

        directives: {
            scroll: {
                inserted: (el, binding) => {
                    let f = (event) => {
                        if (binding.value(event, el)) {
                            window.removeEventListener('scroll', f);
                        }
                    }

                    window.addEventListener('scroll', f);
                }
            }
        },

        created() {
            //window.addEventListener('scroll', this.handleScroll);
            window.addEventListener('load', this.calculateContainerProperties);
        },

        destroyed() {
            //window.removeEventListener('scroll', this.handleScroll);
            window.removeEventListener('load', this.calculateContainerProperties);
        }
    }
</script>
