import { Controller } from "@hotwired/stimulus"

// Connects to data-controller="dropdown"
export default class extends Controller {
    static targets = ["menu", "profileMenu"]

    toggle() {
        for (let target of this.menuTargets) {
            target.classList.toggle("hidden")
        }
    }

    toggleProfile() {
        for (let target of this.profileMenuTargets) {
            if (target.classList.contains('hidden')) {
                target.classList.remove('hidden')
                target.classList.add('block')
            } else {
                target.classList.remove('block')
                target.classList.add('hidden')
            }
        }
    }
}
