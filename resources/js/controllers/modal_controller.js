import { Controller } from "@hotwired/stimulus"
import { useTransition } from "stimulus-use";

export default class extends Controller {
    static values = {
        autoClose: Number
    }

    connect() {
        useTransition(this, {
            leaveActive: 'transition ease-in duration-200',
            leaveFrom: 'opacity-100',
            leaveTo: 'opacity-0',
            transitioned: true,
        })

        if (this.autoCloseValue) {
            setTimeout(() => {
                this.close();
            }, this.autoCloseValue);
        }
    }

    close() {
        this.leave();
    }
}
